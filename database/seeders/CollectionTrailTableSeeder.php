<?php

namespace Database\Seeders;

use App\Models\CollectionTrail;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollectionTrailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('collection_trail')->delete();
        $datas=[
            [
                'collection_id'=>2,
                'trail_id'=>6,
            ],
            [
                'collection_id'=>2,
                'trail_id'=>4,
            ],
            [
                'collection_id'=>5,
                'trail_id'=>5,
            ],
            [
                'collection_id'=>4,
                'trail_id'=>1,
            ],
            [
                'collection_id'=>3,
                'trail_id'=>3,
            ],
            [
                'collection_id'=>4,
                'trail_id'=>2,
            ],[
                'collection_id'=>5,
                'trail_id'=>4,
            ],
            [
                'collection_id'=>5,
                'trail_id'=>3,
            ],
            [
                'collection_id'=>2,
                'trail_id'=>5,
            ],
            [
                'collection_id'=>7,
                'trail_id'=>2,
            ],
        ];
        foreach ($datas as $data){
            $collection_trail=new CollectionTrail();
            $collection_trail->collection_id=$data['collection_id'];
            $collection_trail->trail_id=$data['trail_id'];
            $collection_trail->save();
        }
    }
}
