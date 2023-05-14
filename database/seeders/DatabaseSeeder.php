<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

//        User::truncate();
//        Category::truncate();
//        Post::truncate();
//
//        $user = User::factory()->create([
//           'name'=>'Wolph Paul Fils',
//            'username' => 'Wolph23',
//            'email' => 'wolph4life@yahoo.fr',
//            'password' => fake()->password
//        ]);
//        Post::factory(5)->create([
//            'user_id' => $user -> id
//        ]);


        User::factory()->create();
        Post::factory()->create([
            'user_id' => 2,
            'category_id' => 5,
        ]);

//        $user = User::factory()->create([
//            'name' => 'Wolph Paul Fils',
//            'email' => 'wolph4life@yahoo.fr',
//            'password' => 'wolph1234'
//        ]);
//
//        $ai = Category::create([
//            'name' => 'Artificial Intelligence',
//            'slug' => 'Artificial-Intelligence'
//        ]);
//        $ds = Category::create([
//            'name' => 'Data Science',
//            'slug' => 'Data-Science'
//        ]);
//        $de = Category::create([
//            'name' => 'Data Engineering',
//            'slug' => 'Data-Engineering'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $ai->id,
//            'slug' => 'AI-overview',
//            'title' => 'What is Artificial Intelligence?',
//            'excerpt' => '<p>While a number of definitions of artificial intelligence (AI) have surfaced over the last few decades, John McCarthy offers the following definition in this 2004 paper (PDF, 106 KB) (link resides outside IBM), " It is the science and engineering of making intelligent machines, especially intelligent computer programs.</p>',
//            'body' => '<p>While a number of definitions of artificial intelligence (AI) have surfaced over the last few decades, John McCarthy offers the following definition in this 2004 paper (PDF, 106 KB) (link resides outside IBM), " It is the science and engineering of making intelligent machines, especially intelligent computer programs. It is related to the similar task of using computers to understand human intelligence, but AI does not have to confine itself to methods that are biologically observable."
//                        However, decades before this definition, the birth of the artificial intelligence conversation was denoted by Alan Turing`s seminal work, "Computing Machinery and Intelligence" (PDF, 89.8 KB) (link resides outside of IBM), which was published in 1950. In this paper, Turing, often referred to as the "father of computer science", asks the following question, "Can machines think?"  From there, he offers a test, now famously known as the "Turing Test", where a human interrogator would try to distinguish between a computer and human text response. While this test has undergone much scrutiny since its publish, it remains an important part of the history of AI as well as an ongoing concept within philosophy as it utilizes ideas around linguistics.</p>',
//         ]);
//        Post::create([
//                'user_id' => $user->id,
//                'category_id' => $ai->id,
//                'slug' => 'AI-new-world',
//                'title' => 'Artificial Intelligence and the new world.',
//                'excerpt' => '<p>"It is the science and engineering of making intelligent machines, especially intelligent computer programs."</p>',
//                'body' => '<p>While a number of definitions of artificial intelligence (AI) have surfaced over the last few decades, John McCarthy offers the following definition in this 2004 paper (PDF, 106 KB) (link resides outside IBM), " It is the science and engineering of making intelligent machines, especially intelligent computer programs.</p>'
//            ]);
//        Post::create([
//                'user_id' => $user->id,
//            'category_id' => $ds->id,
//                'slug' => 'ML-overview',
//                'title' => 'What is Machine Learning?',
//                'excerpt' => '<p>Machine learning is a branch of artificial intelligence (AI) and computer science which focuses on the use of data and algorithms to imitate the way that humans learn, gradually improving its accuracy.</p>',
//                'body' => '<p>Machine learning is a branch of artificial intelligence (AI) and computer science which focuses on the use of data and algorithms to imitate the way that humans learn, gradually improving its accuracy.
//
//                IBM has a rich history with machine learning. One of its own, Arthur Samuel, is credited for coining the term, “machine learning” with his research (PDF, 481 KB) (link resides outside IBM) around the game of checkers. Robert Nealey, the self-proclaimed checkers master, played the game on an IBM 7094 computer in 1962, and he lost to the computer. Compared to what can be done today, this feat seems trivial, but it’s considered a major milestone in the field of artificial intelligence.
//
//                Over the last couple of decades, the technological advances in storage and processing power have enabled some innovative products based on machine learning, such as Netflix’s recommendation engine and self-driving cars.
//
//                Machine learning is an important component of the growing field of data science. Through the use of statistical methods, algorithms are trained to make classifications or predictions, and to uncover key insights in data mining projects. These insights subsequently drive decision making within applications and businesses, ideally impacting key growth metrics. As big data continues to expand and grow, the market demand for data scientists will increase. They will be required to help identify the most relevant business questions and the data to answer them.
//
//                Machine learning algorithms are typically created using frameworks that accelerate solution development, such as TensorFlow and PyTorch.</p>'
//            ]);
    }
}
