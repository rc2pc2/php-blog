<?php
include_once __DIR__ . '/../classes/User.php';
include_once __DIR__ . '/../classes/Category.php';
include_once __DIR__ . '/../classes/Post.php';

$testContent = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci doloremque illum dignissimos sequi voluptatum explicabo tempora magni, voluptates maxime dolores deserunt recusandae, ab, saepe debitis. Obcaecati at deserunt quidem reiciendis!
Atque rerum, dolor nobis officiis iure nam. Voluptatum, minima omnis sequi magnam atque ad deleniti corporis maiores quibusdam accusamus explicabo, nesciunt doloribus est quae qui? Minus eius consequatur distinctio aliquam.
Debitis nostrum optio ex recusandae saepe labore exercitationem dolorum officia ipsum! Ab sapiente neque deserunt! Itaque, veniam eum ipsa, accusamus velit natus sint quos esse labore eius, iure minima quis.
Laborum a nihil aspernatur deleniti aperiam voluptatem ipsa, sequi non eos delectus doloremque voluptatum quia architecto, atque ullam repudiandae beatae! Placeat consequuntur alias vel voluptatem reprehenderit vitae, sit eligendi. Dolore!
Vitae ad necessitatibus dicta! Adipisci ex asperiores eum ipsum, quae tempore architecto numquam cumque quia saepe vitae tenetur fugit est nemo harum? Inventore obcaecati quod itaque, voluptatem vero repellat eligendi.
Nostrum tempora, dolor voluptate eum eaque ipsum suscipit aperiam illo facere officia iste eius voluptatibus aliquid ducimus distinctio debitis fuga asperiores unde enim quaerat natus minus! Sunt obcaecati doloribus vero.
Excepturi iure natus incidunt praesentium inventore. Quo cupiditate libero rem voluptatum expedita dicta magni sequi quas numquam ad cumque voluptatem omnis eius, nam voluptas animi dignissimos labore modi distinctio in.
Natus, maiores. Distinctio ab vel nostrum eos nam accusantium, atque ducimus, dolores pariatur, nulla autem explicabo laboriosam officia sequi recusandae officiis at cum sunt magni. Laborum error tempore libero dolorum.
Commodi ut perspiciatis architecto magni, culpa cumque harum asperiores nostrum consequatur eaque cum veniam ad corporis ratione quam a tempore repellat iusto deleniti minus labore tenetur quia quisquam illo? Eum.
Illum, eaque libero consequuntur, optio voluptate explicabo nihil eligendi ut cum dignissimos dolor reprehenderit vel. Quos minima, sunt illo vero perspiciatis excepturi necessitatibus quae numquam magni eligendi quasi, placeat provident.
Quod reiciendis obcaecati, quis asperiores similique nobis! Doloribus, exercitationem tenetur. Reprehenderit ipsum recusandae molestiae debitis! Dolores, ad debitis vel dolor quae optio, labore rem ducimus velit ratione veritatis tempore quis!
Laborum omnis architecto dignissimos quidem nemo fugiat nesciunt dolores delectus ipsa minus deserunt, molestias corrupti, numquam accusantium labore? Sapiente officia velit non suscipit quas provident, blanditiis incidunt odit ipsum earum.
Quis, quod minima, quidem asperiores qui dolore odit quibusdam aliquid voluptate nisi officiis quo, tempora placeat! Omnis at recusandae sit. Voluptas suscipit officia, ipsam deleniti magni molestiae nemo fugit adipisci.
Quia, iusto. Facilis dolorum odit voluptatem non dolore ipsa, debitis voluptates repellat ad doloribus quibusdam eos similique vel deleniti sed illum quaerat accusantium! Ipsam nemo aspernatur atque voluptatibus quidem aperiam.
Deleniti facere odit dolorum reprehenderit iure rerum aspernatur recusandae perspiciatis! Maxime qui dignissimos earum incidunt, quae debitis voluptate quis repudiandae ex facilis necessitatibus. Sapiente voluptatum nobis distinctio ullam. Odit, dolorem.
Obcaecati quibusdam ipsa dolores! Magni, officiis. Ratione minima eius nobis debitis officia? Commodi cumque pariatur nisi natus quis totam expedita aliquid voluptates? Cupiditate, non! Ullam placeat atque quia distinctio dolores?
Aliquid omnis molestiae rem. Error asperiores, dolorum cumque vel autem nobis sed est ratione blanditiis eligendi ut iusto perferendis porro iste ipsam temporibus officia possimus molestias reprehenderit suscipit. Perspiciatis, voluptas.
Cupiditate odit vitae quia cum, laborum modi sint, aut harum voluptatibus, earum esse debitis! Ex facilis nostrum cum aperiam nihil perferendis magni esse aliquam placeat eveniet, quos explicabo deserunt quae?
Quam maiores accusantium vero soluta aut possimus! Dolorem voluptate magnam vero soluta, quis expedita minus odit error praesentium, doloremque cupiditate magni quo corrupti beatae. Blanditiis vitae delectus corrupti ut accusantium.
Quo ex porro nobis dolorem nesciunt esse voluptatem. Rem architecto mollitia labore ex aperiam necessitatibus quisquam quibusdam veniam velit, incidunt magni doloremque. Quam fugiat ab labore numquam exercitationem accusamus voluptatum.
Itaque dolorum similique, optio consequatur necessitatibus ab cupiditate maxime architecto quos tempore laudantium distinctio ducimus expedita ut porro delectus eaque eius. Accusantium nobis deleniti ratione ducimus eius nostrum distinctio? Aperiam?
Obcaecati doloremque odit corporis distinctio quia laudantium voluptatem? Soluta necessitatibus, culpa, expedita eius alias exercitationem deserunt magni nesciunt repellat tenetur voluptate? Officiis repellendus nemo est ipsam quaerat, saepe labore voluptates?
Nisi dolor ab accusamus accusantium in eligendi eaque praesentium quas, molestiae omnis quos? Laudantium reprehenderit aspernatur, dolores tenetur omnis fugiat in odit recusandae error consequuntur, delectus, sapiente ab iste suscipit!
Rerum itaque voluptate doloremque illum beatae nulla praesentium rem, temporibus amet. Vitae dolorem architecto laborum accusamus laudantium, officiis tempora saepe fugit exercitationem praesentium harum impedit similique omnis delectus, aperiam autem?
Dolorum rerum at nulla error dolores rem vel amet dolore. In architecto iure officia perferendis magnam, odit doloremque enim repudiandae alias delectus, necessitatibus quo laborum fugiat inventore sunt nobis tempora!
Ullam neque aliquid, illo pariatur consequuntur ipsam rerum ducimus, excepturi iste voluptatibus asperiores sint omnis enim. Quam sit impedit vero ea nisi quibusdam quod. Adipisci sapiente reiciendis accusantium at cumque!
Tempore voluptatum asperiores distinctio natus laudantium deleniti ut recusandae tenetur error odio animi, tempora beatae architecto delectus officiis expedita nostrum ad quas corporis. Similique quidem aspernatur qui nam inventore vitae.
Temporibus, minima doloribus? Neque est harum culpa aspernatur asperiores, delectus ut debitis tempora accusamus dicta, laboriosam quidem? Autem omnis reiciendis consequuntur doloremque eligendi, porro voluptatibus ullam quae rem neque. Eligendi!
Vero dolor cum, maxime libero autem cumque omnis repellendus quia fuga, voluptatem, reiciendis quam porro esse at illum dolores obcaecati sunt! Iste nam sit, distinctio vero labore delectus excepturi quia.
Magnam minus iure ipsum deleniti nesciunt consequatur? Incidunt quis porro amet perspiciatis natus eligendi iusto aspernatur voluptas quibusdam laborum? A totam, necessitatibus ducimus deleniti aut at hic nobis ipsa dolor.';


$categories = [
    new Category('News', 'https://source.unsplash.com/random/200x200?sig='.rand(100,200)),
    new Category('Sport','https://source.unsplash.com/random/200x200?sig='.rand(100,200)),
    new Category('Life Drama', 'https://source.unsplash.com/random/200x200?sig='.rand(100,200)),
    new Category('Life Happiness', 'https://source.unsplash.com/random/200x200?sig='.rand(100,200)),
];

$users = [
    new User('ginetta', 'gingina@gmail.com', 'https://source.unsplash.com/random/400x400?sig='.rand(100,200)),
    new User('gino', 'ginothebest@gmail.com', 'https://source.unsplash.com/random/400x400?sig='.rand(100,200)),
    new User('huanno', 'lamborghino@gmail.com', 'https://source.unsplash.com/random/400x400?sig='.rand(100,200)),
    new User('didino', 'nonbevoanchesesonoveneto@gmail.com', 'https://source.unsplash.com/random/400x400?sig='.rand(100,200)),
    new User('denoise', 'cybersoberasatazer@gmail.com', 'https://source.unsplash.com/random/400x400?sig='.rand(100,200)),
];


$posts = [
    new Post( new DateTime(), 'Mi sono scordato di scordarmi lo scordamento', $users[rand(0, count($users) - 1)], 'https://source.unsplash.com/random/250x400?sig='.rand(0,100), $testContent, $categories[rand(0, count($categories) - 1)]),
    new Post( new DateTime(), 'Che spettacolo il backend', $users[rand(0, count($users) - 1)], 'https://source.unsplash.com/random/250x400?sig='.rand(0,100), $testContent, $categories[rand(0, count($categories)  - 1)]),
    new Post( new DateTime(), 'Non si dorme in Italia a Luglio', $users[rand(0, count($users) - 1)], 'https://source.unsplash.com/random/250x400?sig='.rand(0,100), $testContent, $categories[rand(0, count($categories) - 1)]),
    new Post( new DateTime(), 'Tutti al lago a casa della mama di Ruggeri', $users[rand(0, count($users) - 1)], 'https://source.unsplash.com/random/250x400?sig='.rand(0,100), $testContent, $categories[rand(0, count($categories) - 1)]),
    new Post( new DateTime(), 'Scoca smettila di andare nei campi elisi', $users[rand(0, count($users) - 1)], 'https://source.unsplash.com/random/250x400?sig='.rand(0,100), $testContent, $categories[rand(0, count($categories) - 1)]),
    new Post( new DateTime(), 'Lisa nun fa l\'anziosa stasera (e manco domani)', $users[rand(0, count($users) - 1)], 'https://source.unsplash.com/random/250x400?sig='.rand(0,100), $testContent, $categories[rand(0, count($categories) - 1)]),
    new Post( new DateTime(), 'Mi sono scordato di scordarmi lo scordamento', $users[rand(0, count($users) - 1)], 'https://source.unsplash.com/random/250x400?sig='.rand(0,100), $testContent, $categories[rand(0, count($categories) - 1)]),
    new Post( new DateTime(), 'Che spettacolo il backend', $users[rand(0, count($users) - 1)], 'https://source.unsplash.com/random/250x400?sig='.rand(0,100), $testContent, $categories[rand(0, count($categories)  - 1)]),
    new Post( new DateTime(), 'Non si dorme in Italia a Luglio', $users[rand(0, count($users) - 1)], 'https://source.unsplash.com/random/250x400?sig='.rand(0,100), $testContent, $categories[rand(0, count($categories) - 1)]),
    new Post( new DateTime(), 'Tutti al lago a casa della mama di Ruggeri', $users[rand(0, count($users) - 1)], 'https://source.unsplash.com/random/250x400?sig='.rand(0,100), $testContent, $categories[rand(0, count($categories) - 1)]),
    new Post( new DateTime(), 'Scoca smettila di andare nei campi elisi', $users[rand(0, count($users) - 1)], 'https://source.unsplash.com/random/250x400?sig='.rand(0,100), $testContent, $categories[rand(0, count($categories) - 1)]),
    new Post( new DateTime(), 'Lisa nun fa l\'anziosa stasera (e manco domani)', $users[rand(0, count($users) - 1)], 'https://source.unsplash.com/random/250x400?sig='.rand(0,100), $testContent, $categories[rand(0, count($categories) - 1)])
];


?>
