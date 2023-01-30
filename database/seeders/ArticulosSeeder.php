<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articulos')->insert([
            'titulo' => 'Prueba1',
            'portada' => 'https://images.pexels.com/photos/3358707/pexels-photo-3358707.png?auto=compress&cs=tinysrgb&w=1600',
            'fecha' => '2023-01-06',
            'categoria' => 'Literatura',
            'resumen' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris.',
            'cuerpo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);
        DB::table('articulos')->insert([
            'titulo' => 'Prueba2',
            'portada' => 'https://images.pexels.com/photos/3358707/pexels-photo-3358707.png?auto=compress&cs=tinysrgb&w=1600',
            'fecha' => '2023-01-06',
            'categoria' => 'Literatura',
            'resumen' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris.',
            'cuerpo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);
        DB::table('articulos')->insert([
            'titulo' => 'Prueba3',
            'portada' => 'https://images.pexels.com/photos/3358707/pexels-photo-3358707.png?auto=compress&cs=tinysrgb&w=1600',
            'fecha' => '2023-01-06',
            'categoria' => 'Cine',
            'resumen' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris.',
            'cuerpo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);
        DB::table('articulos')->insert([
            'titulo' => 'Prueba4',
            'portada' => 'https://images.pexels.com/photos/3358707/pexels-photo-3358707.png?auto=compress&cs=tinysrgb&w=1600',
            'fecha' => '2023-01-06',
            'categoria' => 'Cine',
            'resumen' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris.',
            'cuerpo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);
        DB::table('articulos')->insert([
            'titulo' => 'Prueba5',
            'portada' => 'https://images.pexels.com/photos/3358707/pexels-photo-3358707.png?auto=compress&cs=tinysrgb&w=1600',
            'fecha' => '2023-01-06',
            'categoria' => 'Cultura',
            'resumen' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris.',
            'cuerpo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);
        DB::table('articulos')->insert([
            'titulo' => 'Prueba6',
            'portada' => 'https://images.pexels.com/photos/3358707/pexels-photo-3358707.png?auto=compress&cs=tinysrgb&w=1600',
            'fecha' => '2023-01-06',
            'categoria' => 'Cultura',
            'resumen' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris.',
            'cuerpo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);
        DB::table('articulos')->insert([
            'titulo' => 'Prueba7',
            'portada' => 'https://images.pexels.com/photos/3358707/pexels-photo-3358707.png?auto=compress&cs=tinysrgb&w=1600',
            'fecha' => '2023-01-06',
            'categoria' => 'Literatura',
            'resumen' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris.',
            'cuerpo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);
        DB::table('articulos')->insert([
            'titulo' => 'Prueba8',
            'portada' => 'https://images.pexels.com/photos/3358707/pexels-photo-3358707.png?auto=compress&cs=tinysrgb&w=1600',
            'fecha' => '2023-01-06',
            'categoria' => 'Arte',
            'resumen' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris.',
            'cuerpo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);
        DB::table('articulos')->insert([
            'titulo' => 'Prueba9',
            'portada' => 'https://images.pexels.com/photos/3358707/pexels-photo-3358707.png?auto=compress&cs=tinysrgb&w=1600',
            'fecha' => '2023-01-06',
            'categoria' => 'Arte',
            'resumen' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris.',
            'cuerpo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);
        DB::table('articulos')->insert([
            'titulo' => 'Prueba10',
            'portada' => 'https://images.pexels.com/photos/3358707/pexels-photo-3358707.png?auto=compress&cs=tinysrgb&w=1600',
            'fecha' => '2023-01-06',
            'categoria' => 'Historia',
            'resumen' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris.',
            'cuerpo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);
        DB::table('articulos')->insert([
            'titulo' => 'Prueba11',
            'portada' => 'https://images.pexels.com/photos/3358707/pexels-photo-3358707.png?auto=compress&cs=tinysrgb&w=1600',
            'fecha' => '2023-01-06',
            'categoria' => 'Historia',
            'resumen' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris.',
            'cuerpo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);
        DB::table('articulos')->insert([
            'titulo' => 'Prueba12',
            'portada' => 'https://images.pexels.com/photos/3358707/pexels-photo-3358707.png?auto=compress&cs=tinysrgb&w=1600',
            'fecha' => '2023-01-06',
            'categoria' => 'Musica',
            'resumen' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris.',
            'cuerpo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);
        DB::table('articulos')->insert([
            'titulo' => 'Prueba1',
            'portada' => 'https://images.pexels.com/photos/3358707/pexels-photo-3358707.png?auto=compress&cs=tinysrgb&w=1600',
            'fecha' => '2023-01-06',
            'categoria' => 'Musica',
            'resumen' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris.',
            'cuerpo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);
        DB::table('articulos')->insert([
            'titulo' => 'Prueba13',
            'portada' => 'https://images.pexels.com/photos/3358707/pexels-photo-3358707.png?auto=compress&cs=tinysrgb&w=1600',
            'fecha' => '2023-01-06',
            'categoria' => 'Eventos',
            'resumen' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris.',
            'cuerpo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);
        DB::table('articulos')->insert([
            'titulo' => 'Prueba14',
            'portada' => 'https://images.pexels.com/photos/3358707/pexels-photo-3358707.png?auto=compress&cs=tinysrgb&w=1600',
            'fecha' => '2023-01-06',
            'categoria' => 'Eventos',
            'resumen' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris.',
            'cuerpo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);
        DB::table('articulos')->insert([
            'titulo' => 'Prueba15',
            'portada' => 'https://images.pexels.com/photos/3358707/pexels-photo-3358707.png?auto=compress&cs=tinysrgb&w=1600',
            'fecha' => '2023-01-06',
            'categoria' => 'Otros',
            'resumen' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris.',
            'cuerpo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);
        DB::table('articulos')->insert([
            'titulo' => 'Prueba16',
            'portada' => 'https://images.pexels.com/photos/3358707/pexels-photo-3358707.png?auto=compress&cs=tinysrgb&w=1600',
            'fecha' => '2023-01-06',
            'categoria' => 'Otros',
            'resumen' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris.',
            'cuerpo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor lorem nibh, quis dapibus tortor tristique vulputate. Morbi viverra ante quis nunc interdum, nec ultricies odio posuere. Nulla lectus orci, elementum tincidunt pellentesque non, ultrices id sapien. Donec metus felis, sodales eget libero id, gravida sodales magna. Mauris non aliquam velit, nec pulvinar ex. Donec vehicula, lacus a vulputate placerat, turpis nulla pharetra massa, ut scelerisque lectus metus in mauris. Vestibulum consectetur velit at pretium luctus. Duis congue vulputate ipsum nec lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam quis accumsan metus, quis dignissim tellus. Quisque eget magna dolor. Nunc ac nisi nec justo pharetra tincidunt.',
        ]);
    }
}
