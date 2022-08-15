<?php

namespace Database\Seeders;

use App\Models\MedicinePill;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        // check_out_history_id
        // details random 3 element from array
        // conclusion
        $limit = 500;
        for ($i = 0; $i < $limit; $i++) {
            MedicinePill::create([
                'check_out_history_id' => $i + 1,
                'details' => $faker->randomElement([
                    'Bath additive: 2 unit/time, 3 time/day, 4 day/week',
                    'Bladder irrigation: 2 unit/time, 3 time/day, 4 day/week',
                    'Buccal Tablet: 2 unit/time, 3 time/day, 4 day/week',
                    'Cachet: 2 unit/time, 3 time/day, 4 day/week',
                    'Capsule: 2 unit/time, 3 time/day, 4 day/week',
                    'Chewable tablet: 2 unit/time, 3 time/day, 4 day/week',
                    'Tablet: 2 unit/time, 3 time/day, 4 day/week',
                    'Collodion: 2 unit/time, 3 time/day, 4 day/week',
                    'Sterile concentrate: 2 unit/time, 3 time/day, 4 day/week',
                    'Sterile concentrate: 2 unit/time, 3 time/day, 4 day/week',
                    'Cream: 2 unit/time, 3 time/day, 4 day/week',
                    'Cutaneous liquid: 2 unit/time, 3 time/day, 4 day/week',
                    'Dental liquid: 2 unit/time, 3 time/day, 4 day/week',
                    'Dispersible tablet: 2 unit/time, 3 time/day, 4 day/week',
                    'Ear cream: 2 unit/time, 3 time/day, 4 day/week',
                    'Ear wash: 2 unit/time, 3 time/day, 4 day/week',
                    'Effervescent vaginal tablet: 2 unit/time, 3 time/day, 4 day/week',
                    'Intravenous infusion: 2 unit/time, 3 time/day, 4 day/week',
                    'Injection: 2 unit/time, 3 time/day, 4 day/week',
                    'Endocervical gel: 2 unit/time, 3 time/day, 4 day/week',
                    'Endotracheopulmonary instillation: 2 unit/time, 3 time/day, 4 day/week',
                    'Enema: 2 unit/time, 3 time/day, 4 day/week',
                    'Eye cream: 2 unit/time, 3 time/day, 4 day/week',
                    'Eye lotion: 2 unit/time, 3 time/day, 4 day/week',
                    'Eye lotion, solvent for reconstitution: 2 unit/time, 3 time/day, 4 day/week',
                    'Eye ointment: 2 unit/time, 3 time/day, 4 day/week',
                    'Tablet: 2 unit/time, 3 time/day, 4 day/week',
                    'Gargle: 2 unit/time, 3 time/day, 4 day/week',
                    'Granules: 2 unit/time, 3 time/day, 4 day/week',
                    'Herbal tea: 2 unit/time, 3 time/day, 4 day/week',
                    'Implant: 2 unit/time, 3 time/day, 4 day/week',
                    'Injection: 2 unit/time, 3 time/day, 4 day/week',
                    'Instant herbal tea: 2 unit/time, 3 time/day, 4 day/week',
                    'Kit for radiopharmaceutical preparation: 2 unit/time, 3 time/day, 4 day/week',
                    'Lozenge: 2 unit/time, 3 time/day, 4 day/week',
                    'Medicated chewing-gum: 2 unit/time, 3 time/day, 4 day/week',
                    'Mouth wash: 2 unit/time, 3 time/day, 4 day/week',
                    'Mouth wash, tablet for solution: 2 unit/time, 3 time/day, 4 day/week',
                    'Muco-adhesive buccal tablet: 2 unit/time, 3 time/day, 4 day/week',
                    'Nebuliser liquid: 2 unit/time, 3 time/day, 4 day/week',
                    'Oromucosal liquid: 2 unit/time, 3 time/day, 4 day/week',
                    'Pessary: 2 unit/time, 3 time/day, 4 day/week',
                    'Pillules: 2 unit/time, 3 time/day, 4 day/week',
                    'Poultice: 2 unit/time, 3 time/day, 4 day/week',
                    'Pour-on: 2 unit/time, 3 time/day, 4 day/week',
                    'Radionuclide generator: 2 unit/time, 3 time/day, 4 day/week',
                    'Radiopharmaceutical precursor: 2 unit/time, 3 time/day, 4 day/week',
                    'Rectal capsule: 2 unit/time, 3 time/day, 4 day/week',
                    'Rectal cream: 2 unit/time, 3 time/day, 4 day/week',
                    'Enema: 2 unit/time, 3 time/day, 4 day/week',
                    'Rectal foam: 2 unit/time, 3 time/day, 4 day/week',
                    'Rectal gel: 2 unit/time, 3 time/day, 4 day/week',
                    'Rectal ointment: 2 unit/time, 3 time/day, 4 day/week',
                    'Enema: 2 unit/time, 3 time/day, 4 day/week',
                    'Enema: 2 unit/time, 3 time/day, 4 day/week',
                    'Rectal tampon: 2 unit/time, 3 time/day, 4 day/week',
                    'Sealant: 2 unit/time, 3 time/day, 4 day/week',
                    'Shampoo: 2 unit/time, 3 time/day, 4 day/week',
                    'Soluble tablet: 2 unit/time, 3 time/day, 4 day/week',
                    'Solution for haemodiafiltration: 2 unit/time, 3 time/day, 4 day/week',
                    'Solution for haemodialysis: 2 unit/time, 3 time/day, 4 day/week',
                    'Solution for haemofiltration: 2 unit/time, 3 time/day, 4 day/week',
                    'Intravenous infusion: 2 unit/time, 3 time/day, 4 day/week',
                    'Injection: 2 unit/time, 3 time/day, 4 day/week',
                    'Spot-on: 2 unit/time, 3 time/day, 4 day/week',
                    'Syrup: 2 unit/time, 3 time/day, 4 day/week',
                    'Tablet: 2 unit/time, 3 time/day, 4 day/week',
                    'Vaginal tablet: 2 unit/time, 3 time/day, 4 day/week',
                    'Wound stick: 2 unit/time, 3 time/day, 4 day/week',
                ]),
                'conclusion' => $faker->text,
            ]);
        }
    }
}
