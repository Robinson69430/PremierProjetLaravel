<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Poisson;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void



    {
        /*// User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/


    $poisson = new Poisson();
    $poisson->nom = "Silure";
    $poisson->prix = 100;
    $poisson->type = 'oui';
    $poisson->image = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.lepecheurprofessionnel.fr%2Fsilures-sous-tous-les-feux%2F&psig=AOvVaw3MhaiEpq2veCPAMXNSZXQU&ust=1758100170606000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCODQsNP33I8DFQAAAAAdAAAAABAE";
    $poisson->save();


    $poisson = new poisson();
    $poisson->nom = "Brochet";
    $poisson->prix = 50;
    $poisson->type = 'oui';
    $poisson->image = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fmanubizel.com%2F2024%2F11%2Fadaptation-brochet-mer-baltique.html&psig=AOvVaw22JJWX89Y2rFp15pUTxOwU&ust=1758100253005000&source=images&cd=vfe&opi=89978449&ved=0CBUQjRxqFwoTCMiZyvv33I8DFQAAAAAdAAAAABAL";
    $poisson->save();



    $poisson = new poisson();
    $poisson->nom = "Pirana";
    $poisson->prix = 150;
    $poisson->type = 'oui';
    $poisson->image = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fmanubizel.com%2F2024%2F11%2Fadaptation-brochet-mer-baltique.html&psig=AOvVaw22JJWX89Y2rFp15pUTxOwU&ust=1758100253005000&source=images&cd=vfe&opi=89978449&ved=0CBUQjRxqFwoTCMiZyvv33I8DFQAAAAAdAAAAABAL";
    $poisson->save();
    
    }


    
}
