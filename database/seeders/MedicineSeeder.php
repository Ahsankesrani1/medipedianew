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
                    'description_one' => "About the medicine
                    Dexamethasone is a medicine used to treat a wide range of health conditions. These include:
                    severe skin conditions
                    severe allergies (anaphylaxis)
                    sickness (nausea and vomiting)
                    croup
                    swelling (inflammation) in your eye
                    autoimmune conditions, such as lupus
                    It's used in hospitals as a treatment for severe cases of COVID-19 (coronavirus) and other serious infections.
                    It can also help reduce the side effects of cancer treatment, or some of your symptoms if you're having end of life care.
                    Dexamethasone is a type of medicine called a steroid (corticosteroid). Corticosteroids are a copy of a hormone your body makes naturally. They're not the same as anabolic steroids.
                    It's available on prescription only and comes as tablets, soluble tablets and as a liquid you drink. It can be given by injection but this is usually only done in hospital.
                    It also comes as drops and a spray to treat ear and eye infections.
                    
                    Key Facts
                    You usually take dexamethasone tablets or liquid once a day.
                    It's best to take it in the morning so it does not affect your sleep.
                    The most common side effects are sleep problems, mood changes, indigestion and weight gain.
                    Tell your doctor if you come into contact with anyone who has measles, chickenpox or shingles while you're taking dexamethasone.
                    If you take dexamethasone for more than 3 weeks, or take more than 6mg a day, you'll get a blue steroid card. You may also need to carry a (red) steroid emergency card. Ask your pharmacist or doctor about both of these.
                    You will need to carry a steroid emergency card if you take dexamethasone to treat Addison’s disease, congenital adrenal hyperplasia, other adrenal problems, adrenal insufficiency or hypothalamic or pituitary disorder.
                    
                    ",

                    'description_two' => "                    Side Effects
                    Like all medicines, dexamethasone can cause side effects, although not everyone gets them.
                    Side effects are less likely if you are on a lower dose (less than 6mg a day).
                    Common side effects
                    Common side effects happen in more than 1 in 100 people.
                    Keep taking the medicine, but tell your doctor if these side effects bother you or do not go away:
                    weight gain
                    indigestion
                    sleep problems
                    mild mood changes
                    Serious side effects
                    Serious side effects are more likely with higher doses (more than 6mg a day) or if you take dexamethasone for more than a few weeks or months.
                    Call a doctor straight away if you get:
                    high temperature, chills, a very sore throat, ear or sinus pain, a cough, coughing up more mucus (phlegm) or a change in colour of your mucus, pain when you pee, mouth sores or a wound that will not heal – these can be signs of an infection
                    'moon face' (a puffy, rounded face), weight gain in the upper back or belly – this happens gradually and can be a sign of Cushing's syndrome
                    a very upset stomach or you're being sick (vomiting), very bad dizziness or passing out, muscle weakness, very tired, mood swings, loss of appetite and weight loss – these can be signs of adrenal gland problems
                    sleepy or confused, feel very thirsty or hungry, need to pee more often than usual, flushing, breathing quickly or breath that smells like fruit – these can be signs of high blood sugar (hyperglycaemia)
                    muscle pain, weakness or cramps, or your heartbeats suddenly become more noticeable (heart palpitations) – these can be signs of low potassium levels
                    severe stomach pain, severe back pain, severe upset stomach or you're being sick (vomiting) – these can be signs of pancreas problems
                    swelling or throbbing in your arms or legs, or if you feel breathless or have chest pain – these can be signs of a deep vein thrombosis (DVT) or blood clot
                    unexplained bruising or bleeding that is not normal, black poo, or you're vomiting blood or have black or dark brown vomit – these can be signs of internal bleeding
                    sudden changes in your eyesight
                    
                    Dosage
                    Adults – you'll usually take between 0.5mg and 10mg a day. For some conditions the dose can go up to 16mg a day.
                    Children – doses are usually lower for a child. The doctor will use your child's height and weight to work out the right dose for them.
                    For treating croup, your child will usually have a single one-off dose.
                    
                    
                    
                    
                    
                    Most common question related to this Drug 
                    1. How does dexamethasone work?
                    2. How is dexamethasone used to treat COVID-19 (coronavirus)?
                    3. When will I feel better?
                    4. Can I still have vaccinations?
                    ",

                    'video_link' => "https://www.youtube.com/embed/EUOBdH_gHKs",
                ],
                [
                    'name' => 'Paracetemol',
                    'image' => 'assets\img\Medicines-img\paracetemol\istockphoto-1022216070-612x612.jpeg',
                    'description_one' => "About the Medicine
                    Paracetamol is a common painkiller used to treat aches and pain. It can also be used to reduce a high temperature.
                    It's available combined with other painkillers and anti-sickness medicines. It's also an ingredient in a wide range of cold and flu remedies.
                     
                    Key Facts
                    Paracetamol takes up to an hour to work.
                    The usual dose of paracetamol is one or two 500mg tablets at a time.
                    Do not take paracetamol with other medicines containing paracetamol.
                    Paracetamol is safe to take in pregnancy and while breastfeeding, at recommended doses.
                    Brand names include Disprol, Hedex, Medinol and Panadol.
                    Side Effects 
                    Paracetamol very rarely causes side effects if you take it at the right dosage.
                    If you're worried about a side effect or notice anything unusual, talk to your pharmacist or doctor.
                    
                    ",

                    'description_two' => "Dosage 
                    Paracetamol can be taken with or without food.
                    The usual dose for adults is one or two 500mg tablets up to 4 times in 24 hours.
                    Always leave at least 4 hours between doses.
                    Overdosing on paracetamol can cause serious side effects. Do not be tempted to increase the dose or to take a double dose if your pain is very bad.
                    
                    Note: Adults can take a maximum of 4 doses (up to eight 500mg tablets in total) in 24 hours. Wait at least 4 hours between doses.
                    
                    
                    Most common question related  to this drug
                    1. How does paracetamol work?
                    2. When will I feel better?
                    3. Is paracetamol better than ibuprofen?
                    4. What if paracetamol doesn't work?",

                    'video_link' => "https://www.youtube.com/embed/DVf_aoWBtY",
                ],
                [
                    'name' => 'Remdisiver',
                    'image' => 'assets\img\Medicines-img\remdisiver\image.webp',
                    'description_one' => "About the medicine

                    Remdesivir is an antiviral medicine that works by stopping the virus that causes coronavirus (COVID-19) from growing and spreading in the body.
                    It's used to treat early COVID-19 infection and help to prevent more severe symptoms.
                    You will usually be given remdesivir through a drip in your arm (infusion).
                    You'll need to have the treatment as soon as possible after you have tested positive for COVID-19 and within 7 days of your symptoms starting.
                    
                    If you test positive for COVID-19 and are eligible, you will usually be contacted by the NHS within 24 hours of your positive test result. If you have not been contacted within 24 hours of your positive test but you are eligible for COVID-19 treatments, call your GP surgery or specialist, or call 111. They can make an urgent referral if needed.
                    You will then be assessed (over the phone) to see if remdesivir is right for you. If it's suitable, they'll tell you where to get your treatment, how to get there and how to return home safely. This will usually be by text, email or phone.
                    
                    Key Facts
                    You will have remdesivir treatment once a day for 3 days in a hospital or at a local centre. Even if you start to feel better, it's important that you complete the course.
                    It's important that you start treatment within 7 days of getting COVID-19 symptoms.
                    Your treatment will be given through a drip in your arm (infusion) – it can take between 30 minutes and 2 hours.
                    Remdesivir starts working very soon after having it.
                    Common side effects of remdesivir include headaches and feeling sick
                    
                    ",

                    'description_two' => "                    Side Effects
                    Like all medicines, remdesivir can cause side effects in some people, although not everyone gets them.
                    
                    Common side effects are
                    Headache
                    Feeling sick or being sick(nausea or vomiting)
                    Serious side Effects 
                    Tell your doctor now if you feel that your heart is beating slower than normal. This may make you feel dizzy, short of breath or very tired.
                    
                    Dosage 
                    Person suitable for the drug 
                    You may be eligible for remdesivir if all these apply:
                    you're in a highest risk group below
                    you've had a positive PCR or lateral flow test (reported via GOV.UK or 119)
                    you've had coronavirus (COVID-19) symptoms within the last 5 days (or 7 days if advised by a healthcare professional)
                    The highest risk group includes some people who have:
                    Down's syndrome
                    certain types of cancer or have received treatment for certain types of cancer
                    sickle cell disease
                    certain conditions affecting their blood
                    chronic kidney disease (CKD) stage 4 or 5
                    severe liver disease
                    an organ transplant
                    certain autoimmune or inflammatory conditions (such as rheumatoid arthritis or inflammatory bowel disease)
                    HIV or AIDS who have a weakened immune system
                    inherited or acquired conditions affecting their immune system
                    rare neurological conditions: multiple sclerosis, motor neurone disease, Huntington's disease or myasthenia gravis
                    A doctor or specialist will confirm if you are eligible for treatment.
                    
                    
                                        
                    Most common question related to this Drug
                    1. How does remdesivir work?
                    2. How long does it take to work?
                    3. Are there any long-term side effects?
                    4. How does remdesivir compare with other medicines to treat COVID-19?
                    
                    ",
                    'video_link' => "https://www.youtube.com/embed/nF1g37u5alU",
                ],
                [
                    'name' => 'Semathicone',
                    'image' => 'assets\img\Medicines-img\semathicone\download.jpeg',
                    'description_one' => "About the Medicine
                    Simeticone or (simethicone) is a type of medicine called an antiflatulent. It is used to treat wind (flatulence).
                    It is a mixture of silica gel and dimeticone (or dimethicone, a type of silicone) and is known as 'activated dimeticone'.
                    It can help with trapped wind and bloating as well as colic in babies. People with irritable bowel syndrome (IBS) sometimes take simeticone to ease their symptoms.
                    You can buy it in pharmacies without a prescription, and in some supermarkets.
                    It comes as tablets, capsules, drops and a liquid that you swallow.
                    It often comes combined with other ingredients such as medicines to treat indigestion (antacids) or diarrhoea.
                    Simeticone is also known by the brand names Infacol, Wind-eze and Dentinox Colic Drops. When it's combined with other ingredients, brand names include Maalox Plus and Imodium Plus.
                    
                    Key Facts
                    Simeticone usually starts to work within 30 minutes.
                    It works by bringing together the small gas bubbles in your gut to form bigger bubbles, allowing trapped air to pass through your body more easily.
                    It's generally safe with no known side effects.
                    Most people will only need to take it occasionally, or over a short period of time.
                    Simeticone can be taken during pregnancy and while breastfeeding
                    
                    ",

                    'description_two' => "                    Side Effects
                    Simeticone is a very safe medicine and is generally not known to cause any side effects.
                    Serious allergic reaction
                    In rare cases it's possible to have a serious allergic reaction (anaphylaxis) to simeticone.
                    
                    Note: Tell a doctor if you are pregnant, trying to get pregnant or breastfeeding. 
                    
                    

                    Dosage
                    Doses vary depending on the type of medicine, the brand and the amount of simeticone in it. The dose is lower for babies.
                    For wind, the usual dose is between 100mg and 250mg. You can take the medicine as required, up to 3 or 4 times a day. It’s usually taken after meals and at bedtime.
                    For colic in babies, the usual dose is between 20mg and 40mg, given before each feed, up to 6 times a day.
                    
                    
                    Most common question related to this Drug 
                    1. How does simeticone work?
                    2. How quickly should it start to work?
                    3. How long will I take it for?
                    4. Can I drink alcohol with simeticone?
                    ",
                    'video_link' => "https://www.youtube.com/embed/MJVRT2zN980",
                ],
            ]);
    }
}
