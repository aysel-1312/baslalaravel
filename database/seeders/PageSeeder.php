<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            $pages=['Hakkımızda','Kariyer','Misyonumuz','Vizyonumuz'];
            $count=0;
            foreach ($pages as $page) {
                $count++;

                DB::table('pages')->insert([
                    'title'=>$page,
                    'slug'=>Str::slug($page),
                    'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcVl3wf8kiZM9sWvgUZ4_6pIyc_IzEZlRpNQ&usqp=CAU',
                    'content'=>'Bloglar günümüzde bilgi arayışımızda kurtarıcı
                     birer online yayın mecrasına dönüştü. İnsanlar alışverişini yaptıkları
                     ürünleri, hizmetleri ve özel ilgi alanlarına dair genel bilgileri blog
                     yazılarında paylaşıyor. Çoğu insan da bu yüzden “blog yazısı nasıl yazılır”
                     diye merak edip arama motorlarında vakit geçiriyorlar. Şüphesiz pazarlamacıların
                     yüzde 44’ünün kaliteli bir blog yazısı üretmeyi en zorlu sınavlarından biri olarak
                     görmesinin ve blogger’ların yaklaşık yüzde 25’inin bloglarından son derece olumlu
                     sonuçlar aldıklarını belirtmelerinin bir sebebi var. Bloğunuzun okunmasını istiyorsanız
                     uygulamanız gereken bazı yöntemler mevcut.',
                    'order'=>$count,
                    'created_at'=>now(),
                    'updated_at'=>now(),

                ]);

    }
}}
