<?php

namespace App\Models;



class Post 
{ 
    private static $blog_posts = 
    [
        [
            "title"     => "Judul Post Pertama",
            "slug"     => "judul-post-pertama",
            "author"    => "Edy Saputra",
            "body"    => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis blanditiis placeat voluptates nihil accusamus velit corporis earum ab sapiente? Voluptatum aut dolor deleniti consequatur ipsa a accusantium. Maxime sunt, nobis, nulla commodi totam perspiciatis iusto temporibus eligendi tempora iure similique, voluptas consectetur? Culpa exercitationem tempore excepturi itaque! Eos, maiores hic aperiam nesciunt sint earum omnis quas reprehenderit deserunt et illo possimus perferendis ipsum eligendi temporibus aliquam tenetur, commodi asperiores culpa recusandae rerum. Ab placeat quibusdam sint blanditiis at porro ratione soluta sequi labore amet hic molestias pariatur rerum officia ipsum, non aperiam tenetur unde nemo, culpa minima harum, magni quae! Omnis error laborum, voluptatem, impedit accusamus officia sapiente placeat neque totam pariatur modi perspiciatis tempora repellat, quia illum eos. Earum nesciunt ad error quaerat eos, libero a quasi dolores quia, dicta accusantium numquam maxime dignissimos maiores ducimus veritatis perferendis adipisci eius obcaecati, asperiores ipsa quos. Quidem, qui odio numquam nam reiciendis modi nisi necessitatibus iure consequuntur sunt illo totam aperiam aspernatur mollitia ullam natus accusantium porro accusamus voluptatem, rem repellat? Eum magni aspernatur cupiditate esse ex at officia neque! Incidunt eveniet quis, quia quidem, voluptates soluta praesentium facilis fuga quibusdam nemo doloremque! Ea tempora voluptatibus asperiores minus deleniti eum consequuntur distinctio possimus repellendus vero aspernatur reiciendis, dolorem quis rem aliquam recusandae corporis rerum provident, quisquam temporibus eius veritatis. Veniam blanditiis natus distinctio unde debitis. Veritatis iste tempora id. Distinctio sequi repellat corporis! Quos, aperiam? Fuga unde, fugit et excepturi ex illum natus provident odio nulla expedita inventore. Sapiente ut porro voluptate illum minus totam beatae atque doloribus debitis esse sunt corporis fugiat, quam dolor iure ratione nisi laborum itaque quo consequuntur maiores qui quaerat provident quas! Ab, rerum officiis. Fugiat sit quaerat sint consequatur quo, aliquam totam eaque repellat suscipit, debitis quidem saepe harum veniam ipsam incidunt nemo dolorem dolorum neque! Omnis temporibus ad reprehenderit, obcaecati odit exercitationem cupiditate iste corrupti, corporis architecto consectetur ratione aliquid esse quos animi? Libero consectetur saepe cumque exercitationem fugiat nostrum voluptatem! Provident eveniet earum sapiente totam minus ullam adipisci ad. Adipisci, tempora quae libero fuga a eveniet dolor illum et? Quis molestias et maxime blanditiis ex dolorum nisi laborum quidem, iure incidunt veritatis non ab. Fuga laboriosam iste, blanditiis sunt commodi consequuntur ea doloribus, atque voluptate magni aliquid nisi assumenda voluptatum dolore expedita error sapiente nulla obcaecati molestias animi quas temporibus. Deserunt rerum error tenetur obcaecati similique exercitationem veniam minus quo quasi, laboriosam sint repudiandae aut id eum cumque quisquam a ex molestiae maiores, ut reiciendis quis illum. Ex velit, deserunt doloribus, quibusdam alias quos qui recusandae, distinctio ratione asperiores explicabo. Ipsam doloribus, vel saepe doloremque amet dolor officia delectus quas similique quam quo officiis, facere adipisci. Molestiae quo ipsam aspernatur mollitia voluptatem debitis beatae similique esse et! Reprehenderit nam ducimus est. Repellat quisquam provident fuga minus, eaque, obcaecati quae qui aut nostrum dicta reiciendis voluptate tenetur corporis tempora veritatis, nobis sit sequi? Veniam accusamus repellat consequatur perspiciatis impedit asperiores, dolor rerum? Vero voluptatibus consectetur maxime exercitationem incidunt deleniti veritatis numquam minus culpa delectus!"
        ],
        [
        "title"     => "Judul Post Kedua",
        "slug"     => "judul-post-kedua",
        "author"    => "Memed",
        "body"    => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio iusto, blanditiis eum, ab molestiae reprehenderit adipisci culpa laborum perspiciatis voluptatem quas deserunt consequuntur inventore quasi quam explicabo sequi ex libero. Quia, mollitia, velit maiores excepturi similique possimus dolorum facere saepe facilis sequi voluptates minima accusantium reiciendis quas dolore et provident molestias pariatur ad quod qui labore asperiores commodi! Vel unde nihil inventore delectus deleniti, maxime fugiat saepe eius! Fugiat repudiandae perspiciatis odio esse ab, nisi itaque! Quisquam dolore quam perspiciatis ex natus velit distinctio culpa facilis nobis provident cum rem a cumque iusto iure qui eos, alias corrupti? Magni, velit"
    ]
        ];

        public static function all()
        {
            return collect(self::$blog_posts);
        }

        public static function find($slug) 
        {
             $posts = static::all();
            
             return $posts->firstWhere('slug', $slug);
        }
    
}
