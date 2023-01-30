<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GaleriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galeria')->insert([
            'titulo' => 'prueba1',
            'imagen' => 'https://images.pexels.com/photos/12189102/pexels-photo-12189102.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'fecha' => '2023-01-06',
            'autor' => 'autor de prueba',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);
        DB::table('galeria')->insert([
            'titulo' => 'prueba2',
            'imagen' => 'https://images.pexels.com/photos/12282043/pexels-photo-12282043.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'fecha' => '2023-01-06',
            'autor' => 'autor de prueba',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);
        DB::table('galeria')->insert([
            'titulo' => 'prueba3',
            'imagen' => 'https://images.pexels.com/photos/11651474/pexels-photo-11651474.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'fecha' => '2023-01-06',
            'autor' => 'autor de prueba',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);    
        DB::table('galeria')->insert([
            'titulo' => 'prueba4',
            'imagen' => 'https://images.pexels.com/photos/11991121/pexels-photo-11991121.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'fecha' => '2023-01-06',
            'autor' => 'autor de prueba',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);    
        DB::table('galeria')->insert([
            'titulo' => 'prueba5',
            'imagen' => 'https://images.pexels.com/photos/12333727/pexels-photo-12333727.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'fecha' => '2023-01-06',
            'autor' => 'autor de prueba',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);    
        DB::table('galeria')->insert([
            'titulo' => 'prueba6',
            'imagen' => 'https://images.pexels.com/photos/12334001/pexels-photo-12334001.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'fecha' => '2023-01-06',
            'autor' => 'autor de prueba',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);    
        DB::table('galeria')->insert([
            'titulo' => 'prueba7',
            'imagen' => 'https://images.pexels.com/photos/12168652/pexels-photo-12168652.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'fecha' => '2023-01-06',
            'autor' => 'autor de prueba',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);    
        DB::table('galeria')->insert([
            'titulo' => 'prueba8',
            'imagen' => 'https://images.pexels.com/photos/12252216/pexels-photo-12252216.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'fecha' => '2023-01-06',
            'autor' => 'autor de prueba',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);    
        DB::table('galeria')->insert([
            'titulo' => 'prueba9',
            'imagen' => 'https://images.pexels.com/photos/12302722/pexels-photo-12302722.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'fecha' => '2023-01-06',
            'autor' => 'autor de prueba',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);    
        DB::table('galeria')->insert([
            'titulo' => 'prueba10',
            'imagen' => 'https://images.pexels.com/photos/12317525/pexels-photo-12317525.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'fecha' => '2023-01-06',
            'autor' => 'autor de prueba',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);    
        DB::table('galeria')->insert([
            'titulo' => 'prueba11',
            'imagen' => 'https://images.pexels.com/photos/12326899/pexels-photo-12326899.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'fecha' => '2023-01-06',
            'autor' => 'autor de prueba',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);    
        DB::table('galeria')->insert([
            'titulo' => 'prueba12',
            'imagen' => 'https://images.pexels.com/photos/12028960/pexels-photo-12028960.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'fecha' => '2023-01-06',
            'autor' => 'autor de prueba',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);    
        DB::table('galeria')->insert([
            'titulo' => 'prueba13',
            'imagen' => 'https://images.pexels.com/photos/12028961/pexels-photo-12028961.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'fecha' => '2023-01-06',
            'autor' => 'autor de prueba',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);    
        DB::table('galeria')->insert([
            'titulo' => 'prueba14',
            'imagen' => 'https://images.pexels.com/photos/12331208/pexels-photo-12331208.jpeg?auto=compress&cs=tinysrgb&w=600',
            'fecha' => '2023-01-06',
            'autor' => 'autor de prueba',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);    
        DB::table('galeria')->insert([
            'titulo' => 'prueba15',
            'imagen' => 'https://images.pexels.com/photos/757828/pexels-photo-757828.jpeg?auto=compress&cs=tinysrgb&w=600',
            'fecha' => '2023-01-06',
            'autor' => 'autor de prueba',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);    
        DB::table('galeria')->insert([
            'titulo' => 'prueba16',
            'imagen' => 'https://images.pexels.com/photos/3551805/pexels-photo-3551805.jpeg?auto=compress&cs=tinysrgb&w=600',
            'fecha' => '2023-01-06',
            'autor' => 'autor de prueba',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);    
        DB::table('galeria')->insert([
            'titulo' => 'prueba17',
            'imagen' => 'https://images.pexels.com/photos/2432202/pexels-photo-2432202.jpeg?auto=compress&cs=tinysrgb&w=600',
            'fecha' => '2023-01-06',
            'autor' => 'autor de prueba',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);    
        DB::table('galeria')->insert([
            'titulo' => 'prueba18',
            'imagen' => 'https://images.pexels.com/photos/3700245/pexels-photo-3700245.jpeg?auto=compress&cs=tinysrgb&w=600',
            'fecha' => '2023-01-06',
            'autor' => 'autor de prueba',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);    
        DB::table('galeria')->insert([
            'titulo' => 'prueba19',
            'imagen' => 'https://images.pexels.com/photos/3439314/pexels-photo-3439314.jpeg?auto=compress&cs=tinysrgb&w=600',
            'fecha' => '2023-01-06',
            'autor' => 'autor de prueba',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);    
        DB::table('galeria')->insert([
            'titulo' => 'prueba20',
            'imagen' => 'https://images.pexels.com/photos/3294237/pexels-photo-3294237.jpeg?auto=compress&cs=tinysrgb&w=600',
            'fecha' => '2023-01-06',
            'autor' => 'autor de prueba',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);    
        DB::table('galeria')->insert([
            'titulo' => 'prueba21',
            'imagen' => 'https://images.pexels.com/photos/8159102/pexels-photo-8159102.jpeg?auto=compress&cs=tinysrgb&w=600',
            'fecha' => '2023-01-06',
            'autor' => 'autor de prueba',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);    
        DB::table('galeria')->insert([
            'titulo' => 'prueba22',
            'imagen' => 'https://images.pexels.com/photos/8158745/pexels-photo-8158745.jpeg?auto=compress&cs=tinysrgb&w=600',
            'fecha' => '2023-01-06',
            'autor' => 'autor de prueba',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);    
        DB::table('galeria')->insert([
            'titulo' => 'prueba23',
            'imagen' => 'https://images.pexels.com/photos/13485690/pexels-photo-13485690.jpeg?auto=compress&cs=tinysrgb&w=600',
            'fecha' => '2023-01-06',
            'autor' => 'autor de prueba',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);    
        DB::table('galeria')->insert([
            'titulo' => 'prueba24',
            'imagen' => 'https://images.pexels.com/photos/13438321/pexels-photo-13438321.jpeg?auto=compress&cs=tinysrgb&w=600',
            'fecha' => '2023-01-06',
            'autor' => 'autor de prueba',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);    
        DB::table('galeria')->insert([
            'titulo' => 'prueba25',
            'imagen' => 'https://images.pexels.com/photos/14273122/pexels-photo-14273122.jpeg?auto=compress&cs=tinysrgb&w=600',
            'fecha' => '2023-01-06',
            'autor' => 'autor de prueba',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);        
    }
}
