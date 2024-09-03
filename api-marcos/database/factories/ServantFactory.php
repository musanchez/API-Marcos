<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Servant>
 */
class ServantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Definimos una lista de 20 servants con sus atributos específicos
        $servants = [
            [
                'name' => 'Artoria Pendragon',
                'class' => 'Saber',
                'noble_phantasm' => 'Excalibur',
                'description' => 'La legendaria rey Artoria, conocida por su nobleza y poder con la espada sagrada Excalibur.',
            ],
            [
                'name' => 'Gilgamesh',
                'class' => 'Archer',
                'noble_phantasm' => 'Enuma Elish',
                'description' => 'El rey de los héroes, Gilgamesh, posee la riqueza de Babilonia y el poderoso Noble Phantasm Enuma Elish.',
            ],
            [
                'name' => 'Cu Chulainn',
                'class' => 'Lancer',
                'noble_phantasm' => 'Gáe Bolg',
                'description' => 'El valiente héroe irlandés Cu Chulainn, maestro de la lanza maldita Gáe Bolg.',
            ],
            [
                'name' => 'Medusa',
                'class' => 'Rider',
                'noble_phantasm' => 'Bellerophon',
                'description' => 'La mítica Gorgona Medusa, capaz de invocar al mítico caballo Bellerophon para destruir a sus enemigos.',
            ],
            [
                'name' => 'Hercules',
                'class' => 'Berserker',
                'noble_phantasm' => 'Nine Lives',
                'description' => 'El poderoso semidiós Hércules, quien enloquecido por la furia, desata el poder de su Noble Phantasm Nine Lives.',
            ],
            [
                'name' => 'Emiya',
                'class' => 'Archer',
                'noble_phantasm' => 'Unlimited Blade Works',
                'description' => 'El enigmático héroe Emiya, capaz de materializar una realidad donde las espadas son infinitas.',
            ],
            [
                'name' => 'Alexander the Great',
                'class' => 'Rider',
                'noble_phantasm' => 'Ionioi Hetairoi',
                'description' => 'El gran conquistador Alejandro Magno, capaz de convocar a su ejército inmortal para combatir a su lado.',
            ],
            [
                'name' => 'Jeanne d\'Arc',
                'class' => 'Ruler',
                'noble_phantasm' => 'La Pucelle',
                'description' => 'La santa guerrera Juana de Arco, cuyo sacrificio por la fe invoca un fuego purificador.',
            ],
            [
                'name' => 'Karna',
                'class' => 'Lancer',
                'noble_phantasm' => 'Vasavi Shakti',
                'description' => 'El invencible guerrero Karna, con la lanza que desata la energía del sol.',
            ],
            [
                'name' => 'Ozymandias',
                'class' => 'Rider',
                'noble_phantasm' => 'Ramesseum Tentyris',
                'description' => 'El faraón Ozymandias, cuyo poder radica en su grandioso templo que puede invocar rayos del sol.',
            ],
            [
                'name' => 'Scáthach',
                'class' => 'Lancer',
                'noble_phantasm' => 'Gáe Bolg Alternative',
                'description' => 'La reina guerrera Scáthach, maestra de las artes marciales y poseedora de la lanza maldita.',
            ],
            [
                'name' => 'Merlin',
                'class' => 'Caster',
                'noble_phantasm' => 'Garden of Avalon',
                'description' => 'El mago inmortal Merlín, quien puede invocar el paraíso de Avalon para proteger a sus aliados.',
            ],
            [
                'name' => 'Atalanta',
                'class' => 'Archer',
                'noble_phantasm' => 'Phoebus Catastrophe',
                'description' => 'La cazadora rápida como el viento, Atalanta, quien desata una lluvia de flechas bendecidas por Apolo.',
            ],
            [
                'name' => 'Medea',
                'class' => 'Caster',
                'noble_phantasm' => 'Rule Breaker',
                'description' => 'La hechicera Medea, experta en la magia de traición, capaz de anular los contratos y hechizos con su puñal.',
            ],
            [
                'name' => 'Fionn mac Cumhaill',
                'class' => 'Lancer',
                'noble_phantasm' => 'Mac an Luin',
                'description' => 'El líder de los Fianna, Fionn, cuya lanza Mac an Luin es indomable en combate.',
            ],
            [
                'name' => 'Iskandar',
                'class' => 'Rider',
                'noble_phantasm' => 'Ionian Hetairoi',
                'description' => 'El gran conquistador Iskandar, capaz de convocar a su ejército inmortal para combatir a su lado.',
            ],
            [
                'name' => 'Shuten-Douji',
                'class' => 'Assassin',
                'noble_phantasm' => 'Wine of Sorrow',
                'description' => 'El demonio de la montaña Shuten-Douji, que utiliza su vino envenenado para destruir a sus enemigos.',
            ],
            [
                'name' => 'Tamamo-no-Mae',
                'class' => 'Caster',
                'noble_phantasm' => 'Eightfold Blessing of Amaterasu',
                'description' => 'La astuta Tamamo-no-Mae, con la bendición de la diosa del sol Amaterasu, para proteger y destruir.',
            ],
            [
                'name' => 'Lancelot',
                'class' => 'Berserker',
                'noble_phantasm' => 'Arondight',
                'description' => 'El caballero de la traición, Lancelot, cuyo poder berserker desata el potencial de la espada Arondight.',
            ],
            [
                'name' => 'Nero Claudius',
                'class' => 'Saber',
                'noble_phantasm' => 'Aestus Domus Aurea',
                'description' => 'La emperatriz Nerón, quien desata su Noble Phantasm para recrear la grandeza de la Roma imperial.',
            ],
        ];

        // Seleccionamos aleatoriamente un servant de la lista
        $servant = $this->faker->randomElement($servants);

        return [
            'name' => $servant['name'],
            'class' => $servant['class'],
            'noble_phantasm' => $servant['noble_phantasm'],
            'description' => $servant['description'],
            'strength' => $this->faker->numberBetween(1, 100),
            'endurance' => $this->faker->numberBetween(1, 100),
            'agility' => $this->faker->numberBetween(1, 100),
            'mana' => $this->faker->numberBetween(1, 100),
            'luck' => $this->faker->numberBetween(1, 100),
            'noble_phantasm_level' => $this->faker->numberBetween(1, 5),
        ];
    }
}
