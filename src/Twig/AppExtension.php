<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;
use Doctrine\Common\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

use App\Entity\User;

class AppExtension extends AbstractExtension
{
    protected $em;
    private $container;
    private $session;

    public function __construct(ManagerRegistry $em, Container $container, SessionInterface $session)
    {
        $this->em = $em;
        $this->container= $container;   
        $this->session = $session;
    }
    
    public function getFunctions()
    {
        return [
            new TwigFunction('getUser', [$this, 'getUser']),
        ];
    }

    public function getUser()
    {
        $user = $this->em->getRepository(User::class)->find(1);            
        return $user;
    }
}
