<?php
namespace Plugin\Foo7\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Annotation as Eccube;

/**
 * @Eccube\EntityExtension("Eccube\Entity\Product")
 */
trait Foo7ProductTrait
{
    /**
     * @var string
     *
     * @ORM\Column(name="nickname", type="string", length=32, nullable=true)
     */
    private $nickname;

    /**
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @param string $nickname
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    }

}


