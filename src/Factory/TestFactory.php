<?php

namespace App\Factory;

use App\Entity\Test;
use App\Repository\TestRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<Test>
 *
 * @method static Test|Proxy createOne(array $attributes = [])
 * @method static Test[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Test|Proxy find(object|array|mixed $criteria)
 * @method static Test|Proxy findOrCreate(array $attributes)
 * @method static Test|Proxy first(string $sortedField = 'id')
 * @method static Test|Proxy last(string $sortedField = 'id')
 * @method static Test|Proxy random(array $attributes = [])
 * @method static Test|Proxy randomOrCreate(array $attributes = [])
 * @method static Test[]|Proxy[] all()
 * @method static Test[]|Proxy[] findBy(array $attributes)
 * @method static Test[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static Test[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static TestRepository|RepositoryProxy repository()
 * @method Test|Proxy create(array|callable $attributes = [])
 */
final class TestFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();

        // TODO inject services if required (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services)
    }

    protected function getDefaults(): array
    {
        return [
            // TODO add your default values here (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories)
            'test' => self::faker()->text(),
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(Test $test) {})
        ;
    }

    protected static function getClass(): string
    {
        return Test::class;
    }
}
