<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    /**
     * Display the programs listing page.
     */
    public function index()
    {
        return view('pages.programs.programs_index');
    }

    /**
     * Display a specific program detail page.
     */
    public function show($slug)
    {
        // Program data - In production, this would come from a database
        $programs = [
            'diploma-in-clinical-medicine' => [
                'title' => 'Diploma in Clinical Medicine (Generic)',
                'slug' => 'diploma-in-clinical-medicine',
                'department' => 'Clinical Medicine',
                'type' => 'Generic',
                'duration' => '3 Years',
                'duration_semesters' => '6 Semesters',
                'study_mode' => 'Full-time',
                'image' => 'news2.jpg',
                'overview' => 'Comprehensive training in clinical medicine preparing students for primary healthcare delivery. The program equips students with knowledge and skills to diagnose, treat, and manage common medical conditions.',
                'structure' => [
                    'Year 1: Basic Sciences (Anatomy, Physiology, Biochemistry)',
                    'Year 2: Clinical Medicine, Pharmacology, Pathology',
                    'Year 3: Clinical Rotations, Community Health, Internship'
                ],
                'entry_requirements' => [
                    'MSCE with 6 credits including English, Maths, Biology, Physics, Chemistry',
                    'Minimum grade of C in each required subject'
                ],
                'career_opportunities' => [
                    'Clinical Officer in public/private hospitals',
                    'Rural Health Center Medical Officer',
                    'NGO Health Program Coordinator',
                    'Private Practice'
                ],
                'accreditation' => 'Accredited by Medical Council of Malawi (MCM) and National Council for Higher Education (NCHE)'
            ],
            'diploma-in-clinical-medicine-upgrading' => [
                'title' => 'Diploma in Clinical Medicine (Upgrading)',
                'slug' => 'diploma-in-clinical-medicine-upgrading',
                'department' => 'Clinical Medicine',
                'type' => 'Upgrading',
                'duration' => '2 Years',
                'duration_semesters' => '4 Semesters',
                'study_mode' => 'Full-time',
                'image' => 'news2.jpg',
                'overview' => 'Upgrading program for qualified Medical Assistants with Certificate in Clinical Medicine. Bridges knowledge gaps and enhances clinical competencies to Diploma level.',
                'structure' => [
                    'Advanced Clinical Medicine',
                    'Pharmacology and Therapeutics',
                    'Community Health',
                    'Clinical Rotations',
                    'Research Methods'
                ],
                'entry_requirements' => [
                    'Certificate in Clinical Medicine',
                    'Registered with Medical Council of Malawi',
                    '2 years work experience',
                    'MSCE with 6 credits'
                ],
                'career_opportunities' => [
                    'Senior Clinical Officer',
                    'Clinical Medicine Educator',
                    'Health Center Manager',
                    'Clinical Research Associate'
                ],
                'accreditation' => 'Accredited by Medical Council of Malawi (MCM) and National Council for Higher Education (NCHE)'
            ],
            'bsc-clinical-medicine-mental-health' => [
                'title' => 'BSc in Clinical Medicine (Mental Health) - Upgrading',
                'slug' => 'bsc-clinical-medicine-mental-health',
                'department' => 'Clinical Medicine',
                'type' => 'Upgrading',
                'duration' => '2 Years',
                'duration_semesters' => '4 Semesters',
                'study_mode' => 'Full-time',
                'image' => 'clinical medicine_mental.jpeg',
                'overview' => 'Upgrading program for qualified Clinical Officers specializing in mental health. Focuses on psychiatric assessment, diagnosis, treatment, and mental health policy.',
                'structure' => [
                    'Advanced Psychiatric Assessment',
                    'Psychopharmacology',
                    'Mental Health Policy & Management',
                    'Clinical Rotations in Psychiatric Units',
                    'Research Project'
                ],
                'entry_requirements' => [
                    'Diploma in Clinical Medicine or Mental Health',
                    'Registered with Medical Council of Malawi',
                    '2 years post-qualification experience',
                    'MSCE with 6 credits'
                ],
                'career_opportunities' => [
                    'Mental Health Clinical Officer',
                    'Psychiatric Unit Supervisor',
                    'Mental Health Program Coordinator',
                    'Forensic Mental Health Officer'
                ],
                'accreditation' => 'Accredited by Medical Council of Malawi (MCM) and National Council for Higher Education (NCHE)'
            ],
            'bsc-nursing-midwifery' => [
                'title' => 'BSc in Nursing and Midwifery (Generic)',
                'slug' => 'bsc-nursing-midwifery',
                'department' => 'Nursing and Midwifery',
                'type' => 'Generic',
                'duration' => '4 Years',
                'duration_semesters' => '8 Semesters',
                'study_mode' => 'Full-time',
                'image' => 'Nursing_stud.jpeg',
                'overview' => 'Professional nursing program combining theoretical knowledge with practical clinical skills. Students learn patient care, midwifery, community health nursing, and leadership skills.',
                'structure' => [
                    'Year 1: Nursing Fundamentals, Anatomy, Physiology',
                    'Year 2: Medical-Surgical Nursing, Pharmacology',
                    'Year 3: Midwifery, Pediatric Nursing, Mental Health',
                    'Year 4: Community Health, Leadership, Research, Internship'
                ],
                'entry_requirements' => [
                    'MSCE with 6 credits including English, Maths, Biology, Physics, Chemistry',
                    'Minimum grade of C in required subjects'
                ],
                'career_opportunities' => [
                    'Registered Nurse/Midwife in hospitals',
                    'Nurse Educator',
                    'Community Health Nurse',
                    'Nursing Administrator',
                    'Clinical Nurse Specialist'
                ],
                'accreditation' => 'Accredited by Nurses and Midwives Council of Malawi (NMCM) and NCHE'
            ],
            'bsc-psychiatric-nursing-upgrading' => [
                'title' => 'BSc in Mental Health Psychiatric Nursing - Upgrading',
                'slug' => 'bsc-psychiatric-nursing-upgrading',
                'department' => 'Nursing and Midwifery',
                'type' => 'Upgrading',
                'duration' => '2 Years',
                'duration_semesters' => '4 Semesters',
                'study_mode' => 'Full-time',
                'image' => 'Nursing_stud2.jpeg',
                'overview' => 'Advanced nursing program for Registered Nurses specializing in psychiatric and mental health care. Focuses on therapeutic interventions, mental health assessment, and patient management.',
                'structure' => [
                    'Advanced Psychiatric Nursing',
                    'Therapeutic Interventions',
                    'Mental Health Assessment',
                    'Clinical Practice',
                    'Research in Mental Health'
                ],
                'entry_requirements' => [
                    'Diploma in Nursing or Midwifery',
                    'Registered with Nurses and Midwives Council of Malawi',
                    '2 years clinical experience',
                    'MSCE with 6 credits'
                ],
                'career_opportunities' => [
                    'Psychiatric Nurse Specialist',
                    'Mental Health Unit Manager',
                    'Community Mental Health Nurse',
                    'Nurse Educator in Psychiatry'
                ],
                'accreditation' => 'Accredited by Nurses and Midwives Council of Malawi (NMCM) and NCHE'
            ],
            'bsc-psychotherapy' => [
                'title' => 'BSc in Psychotherapy (Psychosocial Counselling)',
                'slug' => 'bsc-psychotherapy',
                'department' => 'Psycho-Social Counselling',
                'type' => 'Generic',
                'duration' => '4 Years',
                'duration_semesters' => '8 Semesters',
                'study_mode' => 'Full-time',
                'image' => 'psycho.jpeg',
                'overview' => 'Two exit points: Diploma in Psychosocial Counselling after 4 semesters, BSc in Psychotherapy after 8 semesters. Prepares students for professional counselling and psychotherapy practice.',
                'structure' => [
                    'Year 1-2: Foundation in Counselling Skills',
                    'Year 3-4: Advanced Psychotherapy Techniques',
                    'Clinical Supervision and Practice',
                    'Research Project'
                ],
                'entry_requirements' => [
                    'MSCE with 6 credits including English and Mathematics',
                    'Minimum grade of C in English'
                ],
                'career_opportunities' => [
                    'Psychosocial Counsellor',
                    'Psychotherapist',
                    'School Counsellor',
                    'NGO Mental Health Coordinator',
                    'Private Practice Therapist'
                ],
                'accreditation' => 'Accredited by National Council for Higher Education (NCHE)'
            ],
            'bsc-psychotherapy-upgrading' => [
                'title' => 'BSc in Psychotherapy - Upgrading',
                'slug' => 'bsc-psychotherapy-upgrading',
                'department' => 'Psycho-Social Counselling',
                'type' => 'Upgrading',
                'duration' => '2 Years',
                'duration_semesters' => '4 Semesters',
                'study_mode' => 'Full-time',
                'image' => 'psychotherapy1.jpeg',
                'overview' => 'Upgrading program for qualified Counsellors with Diploma in Psychosocial Counselling. Advanced training in psychotherapy techniques, mental health assessment, and therapeutic interventions.',
                'structure' => [
                    'Advanced Psychotherapy Theories',
                    'Mental Health Assessment',
                    'Trauma Counselling',
                    'Clinical Supervision',
                    'Research in Psychotherapy'
                ],
                'entry_requirements' => [
                    'Diploma in Psychosocial Counselling',
                    '2 years counselling experience',
                    'MSCE with 6 credits including English'
                ],
                'career_opportunities' => [
                    'Senior Psychotherapist',
                    'Counselling Supervisor',
                    'Mental Health Program Manager',
                    'Clinical Supervisor'
                ],
                'accreditation' => 'Accredited by National Council for Higher Education (NCHE)'
            ],
            'bsc-public-health' => [
                'title' => 'Bachelor of Science in Public Health',
                'slug' => 'bsc-public-health',
                'department' => 'Public Health',
                'type' => 'Generic',
                'duration' => '4 Years',
                'duration_semesters' => '8 Semesters',
                'study_mode' => 'Full-time',
                'image' => 'public health.jpg',
                'overview' => 'Comprehensive program focusing on community health, epidemiology, health promotion, disease prevention, and health policy. Students learn to address public health challenges at local and global levels.',
                'structure' => [
                    'Epidemiology & Biostatistics',
                    'Health Promotion & Education',
                    'Environmental Health',
                    'Health Policy & Management',
                    'Research Methods & Community Projects'
                ],
                'entry_requirements' => [
                    'MSCE with 6 credits including English, Maths, Biology',
                    'Minimum grade of C in required subjects'
                ],
                'career_opportunities' => [
                    'Public Health Officer',
                    'Epidemiologist',
                    'Health Program Manager',
                    'NGO Health Coordinator',
                    'Health Policy Analyst'
                ],
                'accreditation' => 'Accredited by National Council for Higher Education (NCHE)'
            ]
        ];

        $program = $programs[$slug] ?? null;

        if (!$program) {
            abort(404);
        }

        return view('pages.programs.program_detail', compact('program'));
    }
}