<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\DeliveryAdress;
use App\Entity\Order;
use App\Entity\Paiement;
use App\Entity\Product;
use App\Form\ClientType;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;

class LandingPageController extends AbstractController
{
    /**
     * @Route("/", name="landing_page")
     * @throws \Exception
     */
    public function index(Request $request, ProductRepository $productRepository)
    {
        $order = new Order();
        $client = new Client();
        $client->getDeliveryAdress(new DeliveryAdress());
        $form = $this->createForm(ClientType::class, $client);
        $form->handleRequest($request);
        $product = $productRepository->findAll();
     
        if ($form->isSubmitted() && $form->isValid()) {
            $productId = $request->get('product');
            $product = $productRepository->findOneBy(['id' => $productId]);
            $productPrice = $product->getPrice();
            $this->initDeleveryAdress($client);

            if ($client->getDeliveryAdress()->getFirstName() == null && $client->getDeliveryAdress()->getLastName() == null && $client->getDeliveryAdress()->getAdress() == null && $client->getDeliveryAdress()->getOtherAdress() == null && $client->getDeliveryAdress()->getCountry() == null && $client->getDeliveryAdress()->getPostalCode() == null && $client->getDeliveryAdress()->getCity() == null && $client->getDeliveryAdress()->getPhone() == null) {
                $delivery_adress =  $this->initDeleveryAdress($client); // Check function on bottom
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($client);
            $entityManager->flush();
            $order->setClient($client);
            $order->setProduct($product);
            $order->setFacturationAdress($client);
            $order->setDeliveryAdress($client->getDeliveryAdress());

            // SEND ORDER IN DATABASE 
            
            $entityManager->persist($order);
            $entityManager->flush();

            $payement = new Paiement();
            $payement->setOrders($order);
            $payement->setPaiementstatus('WAITING');
            $payement->setMethod('paypal');


            $content = $this->httpClient($client, $product, $payement, $order);
            $payement->setPaiementApi($content['order_id']);

            $entityManager->persist($payement);
            $entityManager->flush();
            return $this->redirectToRoute('landing_page');
        }

        return $this->render('landing_page/index.html.twig', [
            'client' => $client,
            'form' => $form->createView(),
            'products' => $product,
            'order' => $order
        ]);


        return $this->render('landing_page/index.html.twig', []);
    }

    /**
     * @Route("/confirmation", name="confirmation")
     */
    public function confirmation()
    {
        return $this->render('landing_page/confirmation.html.twig', []);
    }


    public function httpClient(Client $client, Product $product)
    {
        $token = 'mJxTXVXMfRzLg6ZdhUhM4F6Eutcm1ZiPk4fNmvBMxyNR4ciRsc8v0hOmlzA0vTaX';
        $data =

        [
            "order" => [
                "id" => "1",
                "product" => $product->getName(),
                "payment_method" => $payement->getMethod(),
                "status" => $payement->getPaiementStatus(),
                "client" => [
                    "firstname" => $client->getFirstName(),
                    "lastname" => $client->getLastName(),
                    "email" => $client->getMail()
                ],
                "addresses" => [
                    "billing" => [
                        "address_line1" => $client->getAdress(),
                        "address_line2" => $client->getOtherAdress(),
                        "city" => $client->getCity(),
                        "zipcode" => $client->getPostalCode(),
                        "country" => $client->getCountry(),
                        "phone" => $client->getPhone(),
                    ],
                    "shipping" => [
                        "address_line1" => $client->getDeliveryAdress()->getAdress(),
                        "address_line2" => $client->getDeliveryAdress()->getOtherAdress(),
                        "city" => $client->getDeliveryAdress()->getCity(),
                        "zipcode" => $client->getDeliveryAdress()->getPostalCode(),
                        "country" => $client->getDeliveryAdress()->getCountry(),
                        "phone" => $client->getDeliveryAdress()->getPhone()
                    ]
                ]

            ]
        ];

    $data = json_encode($data);
    $httpClient = HttpClient::create([]);
    $response = $httpClient->request('POST', 'https://api-commerce.simplon-roanne.com/order', [
        'headers' => [
            'Authorization' => 'Bearer ' . $token,
            'Content-Type' => 'application/json',
        ],
        'body' => $data
    ]);

    $statusCode = $response->getStatusCode();
    $contentType = $response->getHeaders()['content-type'][0];
    $content = $response->getContent();
    $content = $response->toArray();

    return $this->render('landing_page/confirmation.html.twig');
}

    public function initDeleveryAdress($client)
    {
        $client->getDeliveryAdress()->setFirstName($client->getFirstName());
        $client->getDeliveryAdress()->setLastname($client->getLastname());
        $client->getDeliveryAdress()->setAdress($client->getAdress());
        $client->getDeliveryAdress()->setOtherAdress($client->getOtherAdress());
        $client->getDeliveryAdress()->setCountry($client->getCountry());
        $client->getDeliveryAdress()->setPostalCode($client->getPostalCode());
        $client->getDeliveryAdress()->setCity($client->getCity());
        $client->getDeliveryAdress()->setPhone($client->getPhone());
        return $client->getDeliveryAdress();
    }
}




