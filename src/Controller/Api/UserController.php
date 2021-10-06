<?php

namespace App\Controller\Api;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/api/user")
 */
class UserController extends AbstractController
{
    /**
     * Endpoint permettant au Front d'afficher un utilisateur spécifique et ses informations générales
     * 
     * @Route("/infos/{id<\d+>}", name="api_user_infos", methods={"GET"})
     */
    public function readInfos(User $user = null): Response
    {   
        // On vérifie que le user existe bien
        if (null === $user) {
            return new JsonResponse(
                ["message" => "Cet utilisateur n'existe pas"],
                Response::HTTP_NOT_FOUND
            );
        }
        
        // On retourne l'objet $user en JSON
        return $this->json(['user' => $user], Response::HTTP_OK, [], ['groups' => 'user_infos']);
    }

    /**
     * Endpoint permettant au Front d'afficher les compétences d'un utilisateur spécifique
     * 
     * @Route("/skills/{id<\d+>}", name="api_user_skills", methods={"GET"})
     */
    public function readSkills(User $user = null): Response
    {   
        // On vérifie que le user existe bien
        if (null === $user) {
            return new JsonResponse(
                ["message" => "Cet utilisateur n'existe pas"],
                Response::HTTP_NOT_FOUND
            );
        }
        
        // On retourne l'objet $user en JSON
        return $this->json(['user' => $user], Response::HTTP_OK, [], ['groups' => 'user_skills']);
    }

    /**
     * Endpoint permettant au Front d'afficher les expériences d'un utilisateur spécifique
     * 
     * @Route("/experiences/{id<\d+>}", name="api_user_experiences", methods={"GET"})
     */
    public function readExperiences(User $user = null): Response
    {   
        // On vérifie que le user existe bien
        if (null === $user) {
            return new JsonResponse(
                ["message" => "Cet utilisateur n'existe pas"],
                Response::HTTP_NOT_FOUND
            );
        }
        
        // On retourne l'objet $user en JSON
        return $this->json(['user' => $user], Response::HTTP_OK, [], ['groups' => 'user_experiences']);
    }

    /**
     * Endpoint permettant au Front d'afficher les hobbies d'un utilisateur spécifique
     * 
     * @Route("/hobbies/{id<\d+>}", name="api_user_hobbies", methods={"GET"})
     */
    public function readHobbies(User $user = null): Response
    {   
        // On vérifie que le user existe bien
        if (null === $user) {
            return new JsonResponse(
                ["message" => "Cet utilisateur n'existe pas"],
                Response::HTTP_NOT_FOUND
            );
        }
        
        // On retourne l'objet $user en JSON
        return $this->json(['user' => $user], Response::HTTP_OK, [], ['groups' => 'user_hobbies']);
    }

    /**
     * Endpoint permettant au Front d'afficher les réseaux sociaux d'un utilisateur spécifique
     * 
     * @Route("/social-networks/{id<\d+>}", name="api_user_social-networks", methods={"GET"})
     */
    public function readSocialNetworks(User $user = null): Response
    {   
        // On vérifie que le user existe bien
        if (null === $user) {
            return new JsonResponse(
                ["message" => "Cet utilisateur n'existe pas"],
                Response::HTTP_NOT_FOUND
            );
        }

        // On retourne l'objet $user en JSON
        return $this->json(['user' => $user], Response::HTTP_OK, [], ['groups' => 'user_social_networks']);
    }

    /**
     * Endpoint permettant au Front d'afficher les formations et diplômes d'un utilisateur spécifique
     * 
     * @Route("/training-and-graduate/{id<\d+>}", name="api_user_training-and-graduate", methods={"GET"})
     */
    public function readTrainingAndGraduate(User $user = null): Response
    {   
        // On vérifie que le user existe bien
        if (null === $user) {
            return new JsonResponse(
                ["message" => "Cet utilisateur n'existe pas"],
                Response::HTTP_NOT_FOUND
            );
        }

        // On retourne l'objet $user en JSON
        return $this->json(['user' => $user], Response::HTTP_OK, [], ['groups' => 'user_training_and_graduate']);
    }
}
