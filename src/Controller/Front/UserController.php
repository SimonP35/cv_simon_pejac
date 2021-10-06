<?php

namespace App\Controller\Front;

use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/user")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/{id<\d+>}", name="app_user", methods={"GET"})
     */
    public function showUser(User $user = null): Response
    {
        return $this->render('front/user/index.html.twig', [
            'user' => $user,
        ]);
    }
}
