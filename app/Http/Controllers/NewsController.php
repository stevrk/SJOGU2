<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of news articles.
     */
    public function index()
    {
        // Sample news data - In production, this would come from a database
        $news = [
            [
                'id' => 1,
                'title' => '18th Graduation Ceremony',
                'slug' => '18th-graduation-ceremony',
                'excerpt' => 'The university announces its 18th graduation ceremony scheduled for June 2024.',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'image' => 'graduation.jpg',
                'category' => 'Featured',
                'category_color' => 'red',
                'date' => 'March 15, 2026',
                'created_at' => '2026-03-15',
                'featured' => true
            ],
            [
                'id' => 2,
                'title' => 'Research Conference 2024',
                'slug' => 'research-conference-2024',
                'excerpt' => 'Join us for the annual International Research Conference.',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'image' => 'research.jpeg',
                'category' => 'Event',
                'category_color' => 'green',
                'date' => 'April 5, 2026',
                'created_at' => '2026-04-05',
                'featured' => false
            ],
            [
                'id' => 3,
                'title' => 'Applications Open 2026/27',
                'slug' => 'applications-open-2026-27',
                'excerpt' => 'Applications now open for the upcoming academic year.',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'image' => 'news2.jpg',
                'category' => 'Important',
                'category_color' => 'blue',
                'date' => 'March 10, 2026',
                'created_at' => '2026-03-10',
                'featured' => false
            ],
            [
                'id' => 4,
                'title' => 'New Scholarship Program Launched',
                'slug' => 'new-scholarship-program-launched',
                'excerpt' => 'Exciting new scholarship opportunities for deserving students.',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'image' => 'scholarship.jpg',
                'category' => 'Scholarship',
                'category_color' => 'yellow',
                'date' => 'April 10, 2026',
                'created_at' => '2026-04-10',
                'featured' => false
            ],
            [
                'id' => 5,
                'title' => 'Faculty Development Workshop',
                'slug' => 'faculty-development-workshop',
                'excerpt' => 'Professional development workshop for faculty members.',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'image' => 'workshop.jpg',
                'category' => 'Event',
                'category_color' => 'green',
                'date' => 'May 1, 2026',
                'created_at' => '2026-05-01',
                'featured' => false
            ]
        ];

        

        return view('pages.news.news_index', compact('news'));
    }

    /**
     * Display the specified news article.
     */
    public function show($slug)
    {
        // Sample news data - In production, this would come from a database
        $news = [
            '18th-graduation-ceremony' => [
                'title' => '18th Graduation Ceremony',
                'content' => '<p>The university is proud to announce its 18th graduation ceremony scheduled for June 28, 2024. This momentous occasion will celebrate the academic achievements of over 500 students across various programs.</p>
                             <p>The ceremony will be held at the university main campus starting at 9:00 AM. All graduands are required to be seated by 8:30 AM. Guest speakers include the Minister of Health and distinguished alumni.</p>
                             <p>Graduands are required to collect their academic gowns from the registrar\'s office between June 20-25, 2024. A rehearsal will be held on June 27, 2024 at 2:00 PM.</p>
                             <p>We look forward to celebrating this milestone with our graduands, their families, and friends.</p>',
                'image' => 'graduation.jpg',
                'date' => 'March 15, 2026',
                'category' => 'Featured',
                'author' => 'University Registrar'
            ],
            'research-conference-2024' => [
                'title' => 'Research Conference 2024',
                'content' => '<p>St John of God University is pleased to announce the annual International Research Conference scheduled for August 15-17, 2024.</p>
                             <p>The conference theme is "Innovations in Healthcare: Bridging Research and Practice". We invite researchers, practitioners, and students to submit their abstracts for consideration.</p>
                             <p>Keynote speakers include renowned researchers from across Africa and beyond. The conference will feature oral presentations, poster sessions, and workshops.</p>
                             <p>Abstract submission deadline is June 30, 2024. For more information, contact the research office.</p>',
                'image' => 'research.jpeg',
                'date' => 'April 5, 2026',
                'category' => 'Event',
                'author' => 'Research Office'
            ],
            'applications-open-2026-27' => [
                'title' => 'Applications Open 2026/27 Academic Year',
                'content' => '<p>Applications for the 2026/2027 academic year are now open. Prospective students are invited to apply for various undergraduate and postgraduate programs.</p>
                             <p>Available programs include Clinical Medicine, Nursing and Midwifery, Psycho-Social Counselling, and Public Health. Both generic and upgrading programs are available.</p>
                             <p>Application deadline is May 31, 2026. Late applications will be accepted until June 15, 2026 with a late fee.</p>
                             <p>Apply online through our admissions portal or download application forms from our website. For inquiries, contact the admissions office.</p>',
                'image' => 'news2.jpg',
                'date' => 'March 10, 2026',
                'category' => 'Important',
                'author' => 'Admissions Office'
            ]
        ];

        $article = $news[$slug] ?? null;

        if (!$article) {
            abort(404);
        }

        return view('pages.news.news_show',compact('article'));
    }
}