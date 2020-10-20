<?php

namespace App\DataFixtures;

use App\Entity\CotisationPaymentMethod;
use App\Entity\CotisationUnionParameter;
use App\Entity\CotisationUnionRule;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

use App\Entity\Club;
use App\Entity\DataRegion;
use App\Entity\DataRole;
use App\Entity\DataFunction;
use App\Entity\DataJob;
use App\Entity\DataOperation;
use App\Entity\GedFolder;
use App\Entity\GedRestriction;
use App\Entity\ShopParameter;
use App\Entity\CotisationClubRule;


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
       
    }
}
