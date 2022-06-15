<?php

namespace Database\Seeders;

use App\Models\Medicine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Medicine::insert(
            [
                [
                    'name' => 'Aspirin',
                    'image' => 'assets\img\Medicines-img\aspirin\1.jpeg',
                    'description_one' => 
                    "
                    <p><strong>About the Medicine</strong></p>
                    <p>Aspirin is an everyday painkiller for aches and pains such as&nbsp;<a href='https://www.nhs.uk/conditions/headaches/'>headache</a>,&nbsp;<a href='https://www.nhs.uk/conditions/toothache/'>toothache</a>&nbsp;and&nbsp;<a href='https://www.nhs.uk/conditions/period-pain/'>period pain</a>. It can also be used to treat&nbsp;<a href='https://www.nhs.uk/conditions/baby/health/colds-coughs-and-ear-infections-in-children/'>colds</a>&nbsp;and&nbsp;<a href='https://www.nhs.uk/conditions/flu/'>flu-like symptoms</a>, and to bring down a high temperature.</p>
                    <p>Aspirin is known as an acetylsalicylic acid. It also belongs to a group of medicines called non-steroidal anti-inflammatory drugs (NSAIDs).</p>
                    <p>Aspirin combined with other ingredients is also available in some cold and flu remedies.</p>
                    <p>You can buy most types of aspirin from pharmacies, shops and supermarkets. Some types are only available on prescription.</p>
                    <p>Aspirin comes as tablets or suppositories &ndash; medicine that you push gently into your anus (bottom). It also comes as a gel for mouth ulcers and cold sores.</p>
                    <p>If you've had a stroke or heart attack, or are at high risk of a heart attack, your doctor may recommend that you take a daily low-dose aspirin. Some women may also be prescribed low-dose aspirin while they&rsquo;re pregnant.</p>
                    <p>This is different to taking aspirin for pain relief. Only take low-dose aspirin if your doctor recommends it. Read our&nbsp;<a href='https://www.nhs.uk/medicines/low-dose-aspirin/'>information on low-dose aspirin</a>.</p>
                    <p>&nbsp;</p>
                    <p><strong>Key Facts</strong></p>
                    <ul>
                    <li>It's best to take aspirin with food. That way, you'll be less likely to get an upset stomach or stomach ache.</li>
                    <li>Never give aspirin to children under the age of 16 (unless their doctor prescribes it). It can make children more likely to develop a very rare but serious condition called Reye's syndrome.</li>
                    <li>You should start to feel better 20 to 30 minutes after taking aspirin.</li>
                    <li>Aspirin is an ingredient in combined medicines such as Anadin Original, Anadin Extra, Alka-Seltzer Original, Alka-Seltzer XS and Beechams Powders.</li>
                    </ul>
                    <p>Aspirin as a mouth gel has the brand name Bonjela. Like other aspirin products, it's only for people aged 16 and over. Bonjela Teething Gel and Bonjela Junior Gel do not contain aspirin, so you can give them to children under 16.</p>
                    ",

                    'description_two' => 
                    "
                    <p><strong>Side Effects</strong></p>
                    <p>Like all medicines, aspirin can cause side effects although not everyone gets them.</p>
                    <p>It's best to take the lowest dose that works for you for the shortest possible time. That way, there's less chance that you'll get unwanted side effects.</p>
                    <p>&nbsp;</p>
                    <p><strong>Common side effects</strong></p>
                    <p>These common side effects of aspirin for pain relief happen in more than 1 in 100 people. There are things you can do to help cope with them.</p>
                    <p>Mild indigestion</p>
                    <p>Bleeding more easily than normal</p>
                    <p>&nbsp;</p>
                    <p>Talk to your doctor or pharmacist if the side effects bother you or do not go away.</p>
                    <p><strong>Serious side effects</strong></p>
                    <p>It happens rarely, but some people have serious side effects after taking aspirin.</p>
                    <p>Call your doctor or contact 111 now if:</p>
                    <ul>
                    <li>you cough up blood or have blood in your pee, poo or vomit</li>
                    <li>the whites of your eyes turn yellow or your skin turns yellow (this may be less obvious on brown or black skin), or your pee gets darker) &ndash; this can be a sign of liver problems</li>
                    <li>the joints in your hands and feet are painful &ndash; this can be a sign of high levels of uric acid in the blood</li>
                    <li>your hands or feet are swollen &ndash; this can be a sign of water retention</li>
                    </ul>
                    <p><strong>Stomach ulcers</strong></p>
                    <p>Aspirin can cause ulcers in your stomach or gut, especially if you take it for a long time or in big doses. Your doctor may tell you not to take aspirin if you have a stomach ulcer, or if you've had one in the past.</p>
                    <p>If you're at risk of getting a stomach ulcer and you need a painkiller, take paracetamol instead of aspirin as it's more gentle on your stomach.</p>
                    <p><strong>Serious allergic reaction</strong></p>
                    <p>In rare cases, it's possible to have a serious allergic reaction&nbsp;<a href='https://www.nhs.uk/conditions/anaphylaxis/'>(anaphylaxis)</a>&nbsp;to aspirin .</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p><strong>Dosage </strong></p>
                    <p>The dose of aspirin that's right for you depends on the kind of aspirin you're taking, why you're taking it and how well it helps your symptoms.</p>
                    <p><strong>Dosage and strength of aspirin tablets</strong></p>
                    <p>Aspirin usually comes as 300mg tablets.</p>
                    <p>The usual dose is 1 or 2 tablets, taken every 4 to 6 hours.</p>
                    <p>&nbsp;</p>
                    <p>Note: Do not take more than 12 tablets in 24 hours. Wait at least 4 hours between doses.</p>
                    <p>Note: Do not use more than 24 of the 150mg suppositories or 12 of the 300mg in 24 hours. Wait at least 4 hours between doses.</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p><strong>&nbsp;</strong></p>
                    <p>&nbsp;</p>
                    <p>Most common question related to this Drug</p>
                    <p><span style='text-decoration: underline;'>1.</span><span style='text-decoration: underline;'> How does aspirin for pain relief work?</span></p>
                    <p><span style='text-decoration: underline;'>2.</span><span style='text-decoration: underline;'> When will I feel better?</span></p>
                    <p><span style='text-decoration: underline;'>3.</span><span style='text-decoration: underline;'> What if aspirin does not work?</span></p>
                    <p><span style='text-decoration: underline;'>4. Are there any long term side effects?</span></p>
                    ",

                    'video_link' => "https://www.youtube.com/embed/E61AdIYEBuk",
                ],
                [
                    'name' => 'Clarfin',
                    'image' => 'assets\img\Medicines-img\clarfin\download (1).jpeg',
                    'description_one' => 
                    "
                    <p><strong>About the medicine </strong></p>
                    <p><a href='http://www.webmd.com/drugs/mono-204-LORATADINE+-+ORAL.aspx?drugid=73&amp;drugname=loratadine+oral'>Loratadine</a>&nbsp;is an&nbsp;<a href='http://www.webmd.com/allergies/antihistamines-for-allergies'>antihistamine</a>&nbsp;which provides relief of&nbsp;<a href='http://www.webmd.com/allergies/healthtool-pollen-counter-calculator'>seasonal allergy</a>&nbsp;symptoms such as watery and&nbsp;<a href='http://www.webmd.com/skin-problems-and-treatments/guide/skin-conditions-pruritus'>itching</a>&nbsp;<a href='http://www.webmd.com/eye-health/picture-of-the-eyes'>eyes</a>,&nbsp;<a href='http://www.webmd.com/allergies/postnasal-drip'>runny nose</a>, and&nbsp;<a href='http://www.webmd.com/allergies/features/11-surprising-sneezing-facts'>sneezing</a>.&nbsp;<a href='http://www.webmd.com/drugs/2/drug-55306/pseudoephedrine+dx+oral/details'>Pseudoephedrine</a>&nbsp;is a&nbsp;<a href='http://www.webmd.com/allergies/decongestants'>decongestant</a>&nbsp;which helps relieve a stuffy nose, promotes&nbsp;<a href='http://www.webmd.com/allergies/picture-of-the-sinuses'>sinus</a>&nbsp;draining, and improves breathing.</p>
                    <p><strong>&nbsp;</strong></p>
                    <p>This&nbsp;<a href='http://www.webmd.com/drugs/index-drugs.aspx'>medication</a>&nbsp;is not recommended for use in children under 12 years of age due to the high amount of pseudoephedrine.</p>
                    <p>&nbsp;</p>
                    <p><strong>Key Facts </strong></p>
                    <p><a href='https://www.webmd.com/a-to-z-guides/video/vd-0801-atsp-12'>Drug interactions</a>&nbsp;may change how your&nbsp;<a href='https://www.webmd.com/drugs/index-drugs.aspx'>medications</a>&nbsp;work or increase your risk for serious side effects. This document does not contain all possible drug interactions. Keep a list of all the products you use (including prescription/nonprescription drugs and herbal products) and share it with your doctor and&nbsp;<a href='https://www.webmd.com/a-to-z-guides/features/pharmacists-they-do-more-than-fill-prescriptions'>pharmacist</a>. Do not start, stop, or change the dosage of any medicines without your doctor's approval.</p>
                    ",

                    'description_two' => 
                    "
                    <p><strong>Side Effects</strong></p>
                    <p><a href='https://www.webmd.com/oral-health/guide/dental-health-dry-mouth'>Dry mouth</a>, mild&nbsp;<a href='https://www.webmd.com/digestive-disorders/picture-of-the-stomach'>stomach</a>&nbsp;upset,&nbsp;<a href='https://www.webmd.com/sleep-disorders/sleep-disorders-faq'>trouble sleeping</a>,&nbsp;<a href='https://www.webmd.com/first-aid/understanding-dizziness-basics'>dizziness</a>,&nbsp;<a href='https://www.webmd.com/migraines-headaches/migraines-headaches-basics'>headache</a>, nervousness, loss of appetite, or thirst may occur. If any of these effects last or get worse, tell your doctor or&nbsp;<a href='https://www.webmd.com/a-to-z-guides/features/pharmacists-they-do-more-than-fill-prescriptions'>pharmacist</a>&nbsp;promptly.</p>
                    <p>If your doctor has directed you to use this&nbsp;<a href='https://www.webmd.com/drugs/index-drugs.aspx'>medication</a>, remember that your doctor has judged that the benefit to you is greater than the risk of side effects. Many people using this medication do not have serious side effects.</p>
                    <p>Tell your doctor right away if any of these serious side effects occur: fast/irregular heartbeat, uncontrolled shaking or tremor.</p>
                    <p>Tell your doctor right away if any of these unlikely but serious side effects occur:&nbsp;<a href='https://www.webmd.com/epilepsy/understanding-seizures-basics'>seizures</a>, mental/mood changes, difficulty urinating.</p>
                    <p>This medication does not usually cause drowsiness when used at recommended doses and under normal circumstances. However, this drug may make you dizzy. Use caution if doing activities that require alertness, such as driving or using machinery.</p>
                    <p>A serious&nbsp;<a href='https://www.webmd.com/allergies/allergic-reaction-causes'>allergic reaction</a>&nbsp;to this drug is unlikely, but seek immediate medical attention if it occurs. Symptoms of a serious&nbsp;<a href='https://www.webmd.com/allergies/anaphylaxis-15/slideshow-allergy-triggers'>allergic reaction</a>&nbsp;include:&nbsp;<a href='https://www.webmd.com/skin-problems-and-treatments/guide/common-rashes'>rash</a>,&nbsp;<a href='https://www.webmd.com/skin-problems-and-treatments/guide/skin-conditions-pruritus'>itching</a>/swelling (especially of the face/<a href='https://www.webmd.com/oral-health/picture-of-the-tongue'>tongue</a>/throat), severe dizziness,&nbsp;<a href='https://www.webmd.com/lung/breathing-problems-causes-tests-treatments'>trouble breathing</a>.</p>
                    <p>This is not a complete list of possible side effects. If you notice other effects not listed above, contact your doctor or pharmacist.</p>
                    <p>&nbsp;</p>
                    <p><strong>Dosage </strong></p>
                    <p>Take this&nbsp;<a href='https://www.webmd.com/drugs/index-drugs.aspx'>medication</a>&nbsp;by&nbsp;<a href='https://www.webmd.com/oral-health/anatomy-of-the-mouth'>mouth</a>&nbsp;usually once daily; or take as directed by your doctor. Take with a full glass of water. Do not crush or chew this medication. Doing so can release all of the drug at once, increasing the risk of side effects. Also, do not split the tablets unless they have a score line and your doctor or&nbsp;<a href='https://www.webmd.com/a-to-z-guides/features/pharmacists-they-do-more-than-fill-prescriptions'>pharmacist</a>&nbsp;tells you to do so. Swallow the whole or split tablet without crushing or chewing.</p>
                    <p>Do not increase your dose or take this more often than directed.</p>
                    <p>Do not take this medication for several days before&nbsp;<a href='https://www.webmd.com/allergies/guide/allergies-diagnosis-tests'>allergy testing</a>&nbsp;since test results can be affected. Consult your doctor or pharmacist for more information.</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p><strong>&nbsp;</strong></p>
                    <p>&nbsp;</p>
                    <p>Most common question related to this Drug</p>
                    <p>1.<strong> <a href='https://www.webmd.com/drugs/2/drug-15983/claritin-d-24-hour-oral/details/list-contraindications' target='_self'>Who should not take Claritin-D 24 Hour?</a></strong></p>
                    <p>2.<strong> <a href='https://www.webmd.com/drugs/2/drug-15983/claritin-d-24-hour-oral/details/list-interaction-medication' target='_self'>Does Claritin-D 24 Hour interact with other medications?</a></strong></p>
                    <p>3.<strong> <a href='https://www.webmd.com/drugs/2/drug-15983/claritin-d-24-hour-oral/details/list-interaction-food' target='_self'>Should I avoid certain foods while taking Claritin-D 24 Hour?</a></strong></p>
                    <p>4.<strong> <a href='https://www.webmd.com/drugs/2/drug-15983/claritin-d-24-hour-oral/details/list-conditions' target='_self'>What conditions does Claritin-D 24 Hour treat?</a></strong></p>
                    ", 

                    'video_link' => "https://www.youtube.com/embed/G5TAiIT7oh4", 
                ],
                [
                    'name' => 'Dexamethasone',
                    'image' => 'assets\img\Medicines-img\dexamethasone\d41586-020-01824-5_18087906.jpeg',
                    'description_one' => 
                    "
                    <p><strong>About the medicine</strong></p>
                    <p>Dexamethasone is a medicine used to treat a wide range of health conditions. These include:</p>
                    <ul>
                    <li>severe skin conditions</li>
                    <li>severe allergies (<a href='https://www.nhs.uk/conditions/anaphylaxis/'>anaphylaxis</a>)</li>
                    <li>sickness (nausea and vomiting)</li>
                    <li><a href='https://www.nhs.uk/conditions/croup/'>croup</a></li>
                    <li>swelling (inflammation) in your eye</li>
                    <li>autoimmune conditions, such as&nbsp;<a href='https://www.nhs.uk/conditions/lupus/'>lupus</a></li>
                    </ul>
                    <p>It's used in hospitals as a treatment for severe cases of COVID-19 (coronavirus) and other serious infections.</p>
                    <p>It can also help reduce the side effects of cancer treatment, or some of your symptoms if you're having&nbsp;<a href='https://www.nhs.uk/conditions/end-of-life-care/what-it-involves-and-when-it-starts/'>end of life care</a>.</p>
                    <p>Dexamethasone is a type of medicine called a <a href='https://www.nhs.uk/conditions/topical-steroids/'>steroid (corticosteroid)</a>. Corticosteroids are a copy of a hormone your body makes naturally. They're not the same as <a href='https://www.nhs.uk/conditions/anabolic-steroid-misuse/'>anabolic steroids</a>.</p>
                    <p>It's available on prescription only and comes as tablets, soluble tablets and as a liquid you drink. It can be given by injection but this is usually only done in hospital.</p>
                    <p>It also comes as drops and a spray to treat ear and eye infections.</p>
                    <p>&nbsp;</p>
                    <p><strong>Key Facts</strong></p>
                    <ul>
                    <li>You usually take dexamethasone tablets or liquid once a day.</li>
                    <li>It's best to take it in the morning so it does not affect your sleep.</li>
                    <li>The most common side effects are sleep problems, mood changes, indigestion and weight gain.</li>
                    <li>Tell your doctor if you come into contact with anyone who has&nbsp;<a href='https://www.nhs.uk/conditions/measles/'>measles</a>,&nbsp;<a href='https://www.nhs.uk/conditions/chickenpox/'>chickenpox</a>&nbsp;or&nbsp;<a href='https://www.nhs.uk/conditions/shingles/'>shingles</a>&nbsp;while you're taking dexamethasone.</li>
                    <li>If you take dexamethasone for more than 3 weeks, or take more than 6mg a day, you'll get a blue steroid card. You may also need to carry a (red) steroid emergency card. Ask your pharmacist or doctor about both of these.</li>
                    </ul>
                    <p>You will need to carry a steroid emergency card if you take dexamethasone to treat Addison&rsquo;s disease, congenital adrenal hyperplasia, other adrenal problems, adrenal insufficiency or hypothalamic or pituitary disorder.</p>
                    ",

                    'description_two' => 
                    "
                    <p><strong>Side Effects</strong></p>
                    <p>Like all medicines, dexamethasone can cause side effects, although not everyone gets them.</p>
                    <p>Side effects are less likely if you are on a lower dose (less than 6mg a day).</p>
                    <p><strong>Common side effects</strong></p>
                    <p>Common side effects happen in more than 1 in 100 people.</p>
                    <p>Keep taking the medicine, but tell your doctor if these side effects bother you or do not go away:</p>
                    <ul>
                    <li>weight gain</li>
                    <li>indigestion</li>
                    <li>sleep problems</li>
                    <li>mild mood changes</li>
                    </ul>
                    <p><strong>Serious side effects</strong></p>
                    <p>Serious side effects are more likely with higher doses (more than 6mg a day) or if you take dexamethasone for more than a few weeks or months.</p>
                    <p>Call a doctor straight away if you get:</p>
                    <ul>
                    <li>high temperature, chills, a very sore throat, ear or sinus pain, a cough, coughing up more mucus (phlegm) or a change in colour of your mucus, pain when you pee, mouth sores or a wound that will not heal &ndash; these can be signs of an infection</li>
                    <li>'moon face' (a puffy, rounded face), weight gain in the upper back or belly &ndash; this happens gradually and can be a sign of <a href='https://www.nhs.uk/conditions/cushings-syndrome/'>Cushing's syndrome</a></li>
                    <li>a very upset stomach or you're being sick (vomiting), very bad dizziness or passing out, muscle weakness, very tired, mood swings, loss of appetite and weight loss &ndash; these can be signs of adrenal gland problems</li>
                    <li>sleepy or confused, feel very thirsty or hungry, need to pee more often than usual, flushing, breathing quickly or breath that smells like fruit &ndash; these can be signs of <a href='https://www.nhs.uk/conditions/high-blood-sugar-hyperglycaemia/'>high blood sugar</a>&nbsp;(hyperglycaemia)</li>
                    <li>muscle pain, weakness or cramps, or your heartbeats suddenly become more noticeable (<a href='https://www.nhs.uk/conditions/heart-palpitations/'>heart palpitations</a>) &ndash; these can be signs of low potassium levels</li>
                    <li>severe stomach pain, severe back pain, severe upset stomach or you're being sick (vomiting) &ndash; these can be signs of pancreas problems</li>
                    <li>swelling or throbbing in your arms or legs, or if you feel breathless or have chest pain &ndash; these can be signs of a deep vein thrombosis (DVT) or blood clot</li>
                    <li>unexplained bruising or bleeding that is not normal, black poo, or you're vomiting blood or have black or dark brown vomit &ndash; these can be signs of internal bleeding</li>
                    <li>sudden changes in your eyesight</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p>Dosage</p>
                    <p><strong>Adults</strong>&nbsp;&ndash;&nbsp;you'll usually take between 0.5mg and 10mg a day. For some conditions the dose can go up to 16mg a day.</p>
                    <p><strong>Children</strong>&nbsp;&ndash; doses are usually lower for a child. The doctor will use your child's height and weight to work out the right dose for them.</p>
                    <p>For treating croup, your child will usually have a single one-off dose.</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p><strong>&nbsp;</strong></p>
                    <p>&nbsp;</p>
                    <p>Most common question related to this Drug</p>
                    <p><span style='text-decoration: underline;'>1.</span><span style='text-decoration: underline;'>How does dexamethasone work?</span></p>
                    <p><span style='text-decoration: underline;'>2.</span><span style='text-decoration: underline;'>How is dexamethasone used to treat COVID-19 (coronavirus)?</span></p>
                    <p><span style='text-decoration: underline;'>3.</span><span style='text-decoration: underline;'>When will I feel better?</span></p>
                    <p><span style='text-decoration: underline;'>4. Can I still have vaccinations?</span></p>
                    ",

                    'video_link' => "https://www.youtube.com/embed/EUOBdH_gHKs",
                ],
                [
                    'name' => 'Paracetemol',
                    'image' => 'assets\img\Medicines-img\paracetemol\istockphoto-1022216070-612x612.jpeg',
                    'description_one' => 
                    "
                    <p><strong>About the Medicine</strong></p>
                    <p>Paracetamol is a common painkiller used to treat aches and pain. It can also be used to reduce a high temperature.</p>
                    <p>It's available combined with other painkillers and anti-sickness medicines. It's also an ingredient in a wide range of cold and flu remedies.</p>
                    <p>&nbsp;</p>
                    <p><strong>Key Facts</strong></p>
                    <ul>
                    <li>Paracetamol takes up to an hour to work.</li>
                    <li>The usual dose of paracetamol is one or two 500mg tablets at a time.</li>
                    <li>Do not take paracetamol with other medicines containing paracetamol.</li>
                    <li>Paracetamol is safe to take in pregnancy and while breastfeeding, at recommended doses.</li>
                    </ul>
                    <p>Brand names include Disprol, Hedex, Medinol and Panadol.</p>
                    ",

                    'description_two' => 
                    "
                    <p><strong>Side Effects </strong></p>
                    <p>Paracetamol very rarely causes side effects if you take it at the right dosage.</p>
                    <p>If you're worried about a side effect or notice anything unusual, talk to your pharmacist or doctor.</p>
                    <p><strong>&nbsp;</strong></p>
                    <p><strong>Dosage </strong></p>
                    <p>Paracetamol can be taken with or without food.</p>
                    <p>The usual dose for adults is one or two 500mg tablets up to 4 times in 24 hours.</p>
                    <p>Always leave at least 4 hours between doses.</p>
                    <p>Overdosing on paracetamol can cause serious side effects. Do not be tempted to increase the dose or to take a double dose if your pain is very bad.</p>
                    <p>&nbsp;</p>
                    <p>Note: Adults can take a maximum of 4 doses (up to eight 500mg tablets in total) in 24 hours. Wait at least 4 hours between doses.</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p><strong>Most common question related&nbsp; to this drug</strong></p>
                    <p><strong>1.</strong> How does paracetamol work?</p>
                    <p><strong>2.</strong> When will I feel better?</p>
                    <p><strong>3.</strong> Is paracetamol better than ibuprofen?</p>
                    <p><strong>4.</strong><span style='text-decoration: underline;'> What if paracetamol doesn't work?</span></p>
                    ",

                    'video_link' => "https://www.youtube.com/embed/DVf_aoWBtY",
                ],
                [
                    'name' => 'Remdisiver',
                    'image' => 'assets\img\Medicines-img\remdisiver\image.webp',
                    'description_one' => 
                    "
                    <p><strong>About the medicine</strong></p>
                    <p>Remdesivir is an antiviral medicine that works by stopping the virus that causes coronavirus (COVID-19) from growing and spreading in the body.</p>
                    <p>It's used to treat early COVID-19 infection and help to prevent more severe symptoms.</p>
                    <p>You will usually be given remdesivir through a drip in your arm (infusion).</p>
                    <p>You'll need to have the treatment as soon as possible after you have tested positive for COVID-19 and within 7 days of your symptoms starting.</p>
                    <p><strong>&nbsp;</strong></p>
                    <p>If you test positive for COVID-19 and are eligible, you will usually be contacted by the NHS within 24 hours of your positive test result. If you have not been contacted within 24 hours of your positive test but you are eligible for COVID-19 treatments, call your GP surgery or specialist, or call 111. They can make an urgent referral if needed.</p>
                    <p>You will then be assessed (over the phone) to see if remdesivir is right for you. If it's suitable, they'll tell you where to get your treatment, how to get there and how to return home safely. This will usually be by text, email or phone.</p>
                    <p>&nbsp;</p>
                    <p><strong>Key Facts</strong></p>
                    <ul>
                    <li>You will have remdesivir treatment once a day for 3 days in a hospital or at a local centre. Even if you start to feel better, it's important that you complete the course.</li>
                    <li>It's important that you start treatment within 7 days of getting COVID-19 symptoms.</li>
                    <li>Your treatment will be given through a drip in your arm (infusion) &ndash; it can take between 30 minutes and 2 hours.</li>
                    <li>Remdesivir starts working very soon after having it.</li>
                    </ul>
                    <p>Common side effects of remdesivir include headaches and feeling sick</p>
                    ",

                    'description_two' => 
                    "
                    <p><strong>Side Effects</strong></p>
                    <p>Like all medicines, remdesivir can cause side effects in some people, although not everyone gets them.</p>
                    <p>&nbsp;</p>
                    <p><strong>Common side effects are</strong></p>
                    <ul>
                    <li>Headache</li>
                    <li>Feeling sick or being sick(nausea or vomiting)</li>
                    </ul>
                    <p><strong>Serious side Effects </strong></p>
                    <p>Tell your doctor now if you feel that your heart is beating slower than normal. This may make you feel dizzy, short of breath or very tired.</p>
                    <p>&nbsp;</p>
                    <p><strong>Dosage </strong></p>
                    <p>Person suitable for the drug</p>
                    <p>You may be eligible for remdesivir if all these apply:</p>
                    <ul>
                    <li>you're in a highest risk group below</li>
                    <li>you've had a positive PCR or lateral flow test (reported via GOV.UK or 119)</li>
                    <li>you've had coronavirus (COVID-19) symptoms within the last 5 days (or 7 days if advised by a healthcare professional)</li>
                    </ul>
                    <p>The highest risk group includes some people who have:</p>
                    <ul>
                    <li><a href='https://www.nhs.uk/conditions/downs-syndrome/'>Down's syndrome</a></li>
                    <li>certain types of cancer or have received treatment for certain types of cancer</li>
                    <li><a href='https://www.nhs.uk/conditions/sickle-cell-disease/'>sickle cell disease</a></li>
                    <li>certain conditions affecting their blood</li>
                    <li><a href='https://www.nhs.uk/conditions/kidney-disease/'>chronic kidney disease (CKD)</a>&nbsp;stage 4 or 5</li>
                    <li>severe liver disease</li>
                    <li>an organ transplant</li>
                    <li>certain autoimmune or inflammatory conditions (such as&nbsp;<a href='https://www.nhs.uk/conditions/rheumatoid-arthritis/'>rheumatoid arthritis</a>&nbsp;or&nbsp;<a href='https://www.nhs.uk/conditions/inflammatory-bowel-disease/'>inflammatory bowel disease</a>)</li>
                    <li><a href='https://www.nhs.uk/conditions/hiv-and-aids/'>HIV or AIDS</a>&nbsp;who have a weakened immune system</li>
                    <li>inherited or acquired conditions affecting their immune system</li>
                    <li>rare neurological conditions:&nbsp;<a href='https://www.nhs.uk/conditions/multiple-sclerosis/'>multiple sclerosis</a>,&nbsp;<a href='https://www.nhs.uk/conditions/motor-neurone-disease/'>motor neurone disease</a>,&nbsp;<a href='https://www.nhs.uk/conditions/huntingtons-disease/'>Huntington's disease</a>&nbsp;or&nbsp;<a href='https://www.nhs.uk/conditions/myasthenia-gravis/'>myasthenia gravis</a></li>
                    </ul>
                    <p>A doctor or specialist will confirm if you are eligible for treatment.</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p><strong>Most common question related to this Drug</strong></p>
                    <p><strong>1.</strong><span style='text-decoration: underline;'>How does remdesivir work?</span></p>
                    <p><strong><span style='text-decoration: underline;'>2.</span></strong><span style='text-decoration: underline;'>How long does it take to work?</span></p>
                    <p><strong><span style='text-decoration: underline;'>3.</span></strong><span style='text-decoration: underline;'>Are there any long-term side effects?</span></p>
                    <p><strong><span style='text-decoration: underline;'>4.</span></strong><span style='text-decoration: underline;'> <strong>How does remdesivir compare with other medicines to treat COVID-19?</strong></span></p>
                    ",
                    'video_link' => "https://www.youtube.com/embed/nF1g37u5alU",
                ],
                [
                    'name' => 'Semathicone',
                    'image' => 'assets\img\Medicines-img\semathicone\download.jpeg',
                    'description_one' => 
                    "
                    <p>Aspirin can cause ulcers in your stomach or gut, especially if you take it for a long time or in big doses. Your doctor may tell you not to take aspirin if you have a stomach ulcer, or if you've had one in the past.</p>
                    <p>If you're at risk of getting a stomach ulcer and you need a painkiller, take paracetamol instead of aspirin as it's more gentle on your stomach.</p>
                    <p><strong>Serious allergic reaction</strong></p>
                    <p>In rare cases, it's possible to have a serious allergic reaction&nbsp;<a href='https://www.nhs.uk/conditions/anaphylaxis/'>(anaphylaxis)</a>&nbsp;to aspirin .</p>
                    ",

                    'description_two' => 
                    "
                    <p><strong>Dosage </strong></p>
                    <p>The dose of aspirin that's right for you depends on the kind of aspirin you're taking, why you're taking it and how well it helps your symptoms.</p>
                    <p><strong>Dosage and strength of aspirin tablets</strong></p>
                    <p>Aspirin usually comes as 300mg tablets.</p>
                    <p>The usual dose is 1 or 2 tablets, taken every 4 to 6 hours.</p>
                    <p>&nbsp;</p>
                    <p>Note: Do not take more than 12 tablets in 24 hours. Wait at least 4 hours between doses.</p>
                    <p>Note: Do not use more than 24 of the 150mg suppositories or 12 of the 300mg in 24 hours. Wait at least 4 hours between doses.</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p><strong>&nbsp;</strong></p>
                    <p>&nbsp;</p>
                    <p>Most common question related to this Drug</p>
                    <p><span style='text-decoration: underline;'>1.</span><span style='text-decoration: underline;'> How does aspirin for pain relief work?</span></p>
                    <p><span style='text-decoration: underline;'>2.</span><span style='text-decoration: underline;'> When will I feel better?</span></p>
                    <p><span style='text-decoration: underline;'>3.</span><span style='text-decoration: underline;'> What if aspirin does not work?</span></p>
                    <p><span style='text-decoration: underline;'>4. Are there any long term side effects?</span></p>
                    ",
                    'video_link' => "https://www.youtube.com/embed/MJVRT2zN980",
                ],
            ]);
    }
}
