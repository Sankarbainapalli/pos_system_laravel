<?php

namespace Faker\Provider\hy_AM;

class Person extends \Faker\Provider\Person
{
<<<<<<< HEAD
    protected static $maleNameFormats = [
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
    ];

    protected static $femaleNameFormats = [
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
    ];
=======
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /*
     *
     * {@link} http://www.armeniapedia.org/wiki/Armenian_Male_Names
     */
<<<<<<< HEAD
    protected static $firstNameMale = [
=======
    protected static $firstNameMale = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        'Աբգար', 'Աբէլ', 'Ազատ', 'Ազնաւուր', 'Ազնուական', 'Ալիշան', 'Ակնունի', 'Աղան', 'Աղասի', 'Ամարաս', 'Այգեկ', 'Անակ',
        'Անդրանիկ', 'Անուշաւան', 'Աշոտ', 'Ապիրատ', 'Արանձեր', 'Առատ', 'Արաքել', 'Առէն', 'Առուծ', 'Աժնակ', 'Ասողիկ', 'Ասպետ', 'Աստուածատուր',
        'Ասատուր', 'Ատուր', 'Ատրուշան', 'Արա', 'Արագած', 'Արայիկ', 'Արամ', 'Արամազդ', 'Արամայիս', 'Արարատ', 'Արբուն', 'Արէգ', 'Արեւ', 'Արուշատ',
        'Արէտ', 'Արթուն', 'Արի', 'Արիստակես', 'Արծիւ', 'Արծրունի', 'Արծան', 'Արման', 'Արմենակ', 'Արմեն', 'Արշակ', 'Արշաւիր', 'Արշէն', 'Արսէն', 'Արտակ',
        'Արտաշէս', 'Արտաւազդ', 'Արտաւան', 'Արտեմ', 'Արտոյտ', 'Արտոս', 'Արփիար', 'Արքայ', 'Աւագ', 'Աւարայր', 'Աւետ', 'Աւետիք', 'Աւետիս', 'Աւո', 'Բաբաջան',
        'Բաբգէն', 'Բագարատ', 'Բագին', 'Բագրատ', 'Բազէ', 'Բազուկ', 'Բալիկ', 'Բակուր', 'Բանիկ', 'Բաշխի', 'Բարիք', 'Բարթուղիմէոս', 'Բարունակ', 'Բարսեղ', 'Բեգլար',
        'Բենիկ', 'Բեդրակ', 'Բիւզանդ', 'Բիւրատ', 'Բիւրակ', 'Գագիկ', 'Գալէ', 'Գալուստ', 'Գալիկ', 'Գալօ', 'Գամար', 'Գանձ', 'Գառնիկ', 'Գասպար', 'Գարեգին',
        'Գեղամ', 'Գեղարդ', 'Գեղօն', 'Գերսամ', 'Գէորգ', 'Գինդ', 'Գիսակ', 'Գիւտ', 'Գլակ', 'Գնէլ', 'Գոռ', 'Գորիս', 'Գուսան', 'Գուրգէն', 'Գրգուռ',
        'Գրիգոր', 'Գրիգորիս', 'Դանիէլ', 'Դաւթակ', 'Դաւիթ', 'Դերենիկ', 'Դիւցազն', 'Դրաստամատ', 'Դրո', 'Դուին', 'Եդուարդ', 'Եզնիկ', 'Եզր', 'Եղիա', 'Եղիշէ',
        'Եղիվարդ', 'Ենովք', 'Եսայի', 'Երեմիա', 'Երկաթ', 'Երուանդ', 'Երջանիկ', 'Եփրատ', 'Եփրեմ', 'Զատիկ', 'Զարեհ', 'Զարեւանդ', 'Զարմայր', 'Զարմիկ', 'Զաւեն',
        'Զաքարիա', 'Զաքարէ', 'Զգօն', 'Զենոր', 'Զինուոր', 'Զոհրապ', 'Զօրավար', 'Զօրայր', 'Էմմանուէլ', 'Ընձակ', 'Թագաւոր', 'Թադէոս', 'Թադէ', 'Թաթիկ', 'Թաթուլ',
        'Թոռնիկ', 'Թորգոմ', 'Թովմաս', 'Թորոս', 'Թուխայր', 'Թուխիկ', 'Ժիրայր', 'Իմաստուն', 'Իշխան', 'Իսահակ', 'Լամբրոն', 'Լեւոն', 'Լեռնիկ', 'Լիպարիտ', 'Լոյս',
        'Լոռիս', 'Խադ', 'Խաժակ', 'Խաչատուր', 'Խաչերես', 'Խաչիկ', 'Խոյանք', 'Խոսրով', 'Խորէն', 'Ծամհուր', 'Ծատուր', 'Ծերուն', 'Կամսարական', 'Կամո', 'Կայծակ',
        'Կայծան', 'Կանդ', 'Կարապետ', 'Կարօ', 'Կարէն', 'Կարիկ', 'Կարին', 'Կարպիս', 'Կիլիկիա', 'Կիրակոս', 'Կիւրեղ', 'Կոմիտաս', 'Կոստան', 'Կոստանդին', 'Կորիւն',
        'Կտրիճ', 'Հազարապետ', 'Համազասպ', 'Համբարձում', 'Համբիկ', 'Համլիկ', 'Հայաստան', 'Հայդուկ', 'Հայկ', 'Հայկազն', 'Հայկազուն', 'Հայկակ', 'Հայկասէր', 'Հայկաշէն', 'Հայկարամ',
        'Հայոց', 'Հայրապէտ', 'Հայրենիք', 'Հայրիկ', 'Հեթում', 'Հերոս', 'Հմայեակ', 'Հովիկ', 'Հրազդան', 'Հրահատ', 'Հրայր', 'Հրանդ', 'Հրաշեայ', 'Ձագիկ', 'Ղազարոս',
        'Ղարիպ', 'Ղեւոնդ', 'Ղուկաս', 'Ճանիկ', 'Մաթիկ', 'Մալխաս', 'Մակար', 'Մաղաքիա', 'Մամբրէ', 'Մամիկոն', 'Մայիս', 'Մանասէ', 'Մանուէլ', 'Մանուկ', 'Մաշտոց',
        'Մասիս', 'Մատթէոս', 'Մարգար', 'Մարզպէտ', 'Մարկոս', 'Մարտիկ', 'Մարտիրոս', 'Մելիք', 'Մելքոն', 'Մեղրիկ', 'Մեխակ', 'Մեծարենց', 'Մեսրոպ', 'Մերուժան', 'Մժէժ',
        'Միհրան', 'Միհրդատ', 'Մինաս', 'Միսակ', 'Միւռոն', 'Միքայէլ', 'Մլէհ', 'Մխիթար', 'Մկրտիչ', 'Մհեր', 'Մնացական', 'Մնձուր', 'Մոմիկ', 'Մովսէս', 'Մոսիկ',
        'Մուշեղ', 'Մուրատ', 'Յաբէթ', 'Յակոբ', 'Յարութ', 'Յարութիւն', 'Յարօ', 'Յոյս', 'Յովակ', 'Յովակիմ', 'Յովհաննէս', 'Յովհան', 'Յովիկ', 'Յովնաթան', 'Յովնան',
        'Յովսէփ', 'Յուիկ', 'Նազարէթ', 'Նահապետ', 'Նար', 'Նարդունի', 'Նարեկ', 'Նաւասարդ', 'Ներսեհ', 'Ներսէս', 'Նժդեհ', 'ՆԻկոլ', 'ՆԻկողոս', 'Նշան', 'Նորազն',
        'Նորայր', 'Նորիկ', 'Նորհատ', 'Նորվան', 'Նուպար', 'Նպատ', 'Շարան', 'Շահան', 'Շահէ', 'Շահէն', 'Շահիկ', 'Շահնուր', 'Շանթ', 'Շապուհ', 'Շատարեւ',
        'Շարա', 'Շաւասպ', 'Շաւարշ', 'Շէն', 'Շիրազ', 'Շիրակ', 'Շմաւոն', 'Շնորհալի', 'Շնորհք', 'Ոսկան', 'Ոսկեբարան', 'Ոստան', 'Որդի', 'Որոտան', 'Չարենց',
        'Պալիկ', 'Պաղտասար', 'Պաղտիկ', 'Պաղտօ', 'Պապիկ', 'Պատուական', 'Պատրիկ', 'Պարգեւ', 'Պարէտ', 'Պարթեւ', 'Պարոյր', 'Պետրոս', 'Պեպո', 'Պերճ', 'Պռոշ',
        'Պսակ', 'Պօղոս', 'Ռազմիկ', 'Ռաֆայէլ', 'Ռոստոմ', 'Ռուբէն', 'Սահակ', 'Սամուէլ', 'Սամսոն', 'Սանասար', 'Սանատրուկ', 'Սասուն', 'Սարգիս', 'Սագօ', 'Սարգօ',
        'Սահրատ', 'Սարօ', 'Սեդրակ', 'Սեպուհ', 'Սերոբ', 'Սերովբէ', 'Սերօ', 'Սեւակ', 'Սեւան', 'Սէթ', 'Սիմէոն', 'Սիմոն', 'Սիոն', 'Սիսակ', 'Սիրական',
        'Սիրաք', 'Սիփան', 'Սլաք', 'Սմբատ', 'Սողոմոն', 'Սուրէն', 'Սուրիկ', 'Սուքիաս', 'Ստեփան', 'Սօս', 'Վազգէն', 'Վազրիկ', 'Վախթանկ', 'Վախտանգ', 'Վահագն',
        'Վահան', 'Վահէ', 'Վահիկ', 'Վահրամ', 'Վահրիճ', 'Վանանդ', 'Վանիկ', 'Վան', 'Վաղարշակ', 'Վաղինակ', 'Վանական', 'Վաչական', 'Վաչագան', 'Վաչէ',
        'Վասակ', 'Վարագ', 'Վարազդատ', 'Վարանդ', 'Վարդ', 'Վարդան', 'Վարդավառ', 'Վարդգես', 'Վարդերես', 'Վարուժան', 'Վիգէն', 'Վերածին', 'Վէմ', 'Վռամշապուհ', 'Վրէժ',
        'Վրթանէս', 'Վրոյր', 'Տաթեւ', 'Տաճատ', 'Տատուր', 'Տարօն', 'Տաւրոս', 'Տէրուն', 'Տիգրան', 'Տիրազան', 'Տիրայր', 'Տիրան', 'Տիրատուր', 'Տիրիթ', 'Տորք',
        'Տրդատ', 'Տօնապետ', 'ՐաՖՖի', 'Ցաւակ', 'Ցոլակ', 'Փայլակ', 'Փանիկ', 'Փանոս', 'Փառէն', 'Փառնակ', 'Փարամազ', 'Փիլիպպոս', 'Քաջիկ', 'Քաջազուն', 'Քաջազօր',
        'Քաջայր', 'Քերովբէ', 'Քրիստափոր', 'Օգսէն', 'Օհան', 'Օնէ', 'Օննիկ', 'Օշին', 'Օշական', 'Օտա'
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /*
     *
     * {@link} http://www.armeniapedia.org/wiki/Armenian_Female_Names
     */
<<<<<<< HEAD
    protected static $firstNameFemale = [
=======
    protected static $firstNameFemale = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        'Ազատուհի', 'Ազգանոյշ', 'Ազնիւ', 'Ալիծ', 'Ալին', 'Ալիս', 'Ալիք', 'Ալվարդ', 'Աղաւնի', 'Աղբիւր', 'Աղուոր', 'Ամանոր', 'Այծեամ', 'Այծեմնիկ',
        'Ալծիկ', 'Այտա', 'Անահիտ', 'Անայիս', 'Անգինէ', 'Անթառամ', 'Անի', 'Աննա', 'Աննիկ', 'Անծրեւիկ', 'Աննման', 'Անոյշ', 'Աշխէն', 'Աստղիկ',
        'Ատրինէ', 'Արազ', 'Արաքս', 'Արաքսի', 'Արեգնազ', 'Արեգնազան', 'Արեւիկ', 'Արեւահատ', 'Արծնի', 'Արծուիկ', 'Արմենուհի', 'Արմենուշ',
        'Արմիկ', 'Արմինէ', 'Արշալոյս', 'Արշակուհի', 'Արուսեակ', 'Արսինէ', 'Արտա', 'Արտեմիս', 'Արփա', 'Արփենիկ', 'Արփի', 'Արփիկ', 'Արփինէ', 'Արման',
        'Բագինէ', 'Բալենի', 'Բալասան', 'Բարի', 'Բարուհի', 'Բաւական', 'Բերկրուհի', 'Բերսարէ', 'Բիւրական', 'Բիւրեղ', 'Բուրաստան', 'Բրաբիոն', 'Գայիանէ', 'Գարիկ', 'Գարուն',
        'Գեղանի', 'Գեղածին', 'Գեղանոյշ', 'Գեղուշ', 'Գեղեցիկ', 'Գեղուհի', 'Գինեվարդ', 'Գոհար', 'Դալար', 'Դարուհի', 'Դափնի', 'Դեղձանիկ', 'Դիլիջան', 'Դշխոյ', 'Դշխուհի',
        'Դշխուն', 'Դստրիկ', 'Եար', 'Եթեր', 'Եղիսաբէթ', 'Եղնիկ', 'Եսթեր', 'Երազ', 'Երանիկ', 'Երանուհի', 'Երասխ', 'Երատոյ', 'Երջանիկ', 'Երջանկուհի', 'Եւա',
        'Եւգինէ', 'Եւփիմէ', 'Եփրուհի', 'Զանազան', 'Զապէլ', 'Զարդար', 'Զարիկ', 'Զարմանդուխտ', 'Զարմինէ', 'Զարմուհի', 'Զարուհի', 'Զարվարդ', 'Զեփիւր', 'Զմրուխտ', 'Զուարթ',
        'Զուլալ', 'Զօրա', 'Էլիզա', 'Էմմա', 'Էօժէնի', 'Ըղցանոյշ', 'Ընծայ', 'Ընձանոյշ', 'Ընտրելի', 'Թագուհի', 'Թալին', 'Թամար', 'Թամար', 'Թանկագին',
        'Թիթեռ', 'Թուխծամ', 'Ժպտուհի', 'Ինաստուհի', 'Ինա', 'Իշխանուհի', 'Իսկուհի', 'Իսկուկ', 'Իւղաբեր', 'Լալակ', 'Լասիա', 'Լալիկ', 'Լենա', 'Լեւոնթին',
        'Լիլի', 'Լիւսիա', 'Լոյս', 'Լորգի', 'Լորիկ', 'Լուսաբեր', 'Լուսածին', 'Լուսերես', 'Լուսիկ', 'Լուսին', 'Լուսինէ', 'Լուսնակ', 'Լուսնթագ', 'Լուսվարդ',
        'Խաթուն', 'Խաչուհի', 'Խնկենի', 'Խոնարհ', 'Խոսրովանոյշ', 'Խոսրովիդուխտ', 'Խորոտիկ', 'Խումար', 'Ծաղկանոյշ', 'Ծաղիկ', 'Ծաղկոտն', 'Ծիա', 'Ծիածան', 'Ծիլեր', 'Ծովակ',
        'Ծովինար', 'Ծովաչ', 'Ծովիկ', 'Կակաչ', 'Կասիա', 'Կատար', 'Կատարինէ', 'Կարինէ', 'Կաքաւիկ', 'Կարսինէ', 'Կուսինէ', 'Հազարվարդ', 'Համասփիւռ', 'Համաստուհի',
        'Հայարփի', 'Հայկանոյշ', 'Հայկուհի', 'Հեղինէ', 'Հերազանդ', 'Հերա', 'Հերանոյշ', 'Հերմինէ', 'Հնազանդ', 'Հուրի', 'Հուրիկ', 'Հռիփսիմէ', 'Հռութ', 'Հրանդուհի',
        'Հրանոյշ', 'Հրավարդ', 'Հրեղէն', 'Հրենիկ', 'Ձագուկ', 'Ձնծաղիկ', 'Ձուիկ', 'Մակի', 'Մամէ', 'Մամիկ', 'Մայտա', 'Մայրանոյշ', 'Մայրենի', 'Մայրի', 'Մանէ',
        'Մանիշակ', 'Մաննիկ', 'Մանուշակ', 'Մատլէն', 'Մարալ', 'Մարգարիտ', 'Մարկո', 'Մարթա', 'Մարի', 'Մարիամ', 'Մարօ', 'Մարիանէ', 'Մարինէ', 'Մարմար', 'Մաքրինէ',
        'Մաքրուհի', 'Մելինէ', 'Մեղեդի', 'Մեղուշ', 'Մեղրանոյշ', 'Մենտուհի', 'Մենիկ', 'Մինա', 'Յակինթ', 'Յաղթուհի', 'Յասմիկ', 'Յաւերժ', 'Յուլիանէ', 'Յուսինէ', 'Նազանի',
        'Նազելի', 'Նազենիկ', 'Նազիկ', 'Նազուկ', 'Նայիրա', 'Նայիրի', 'Նախշուն', 'Նանար', 'Նանէ', 'Նանիկ', 'Նանօր', 'Նարդուհի', 'Նարէ', 'Նարինէ', 'Նեկտար',
        'Նինա', 'Նոյեմի', 'Նորա', 'Նուարդ', 'Նուէր', 'Նունէ', 'Նունուֆար', 'Նուշիկ', 'Նուրիձա', 'Շաղիկ', 'Շահանդուխտ', 'Շահանիկ', 'Շահանի', 'Շամամ', 'Շամիրամ',
        'Շարմաղ', 'Շաքէ', 'Շնորհիկ', 'Շողակաթ', 'Շողեր', 'Շողիկ', 'Շուշան', 'Շուշիկ', 'Շուշօ', 'Ոգուհի', 'Ոսկեթել', 'Ոսկեծամ', 'Ոսկեհատ', 'Ոսկեհեր', 'Ոսկի',
        'Ովսաննա', 'Պայծառ', 'Պերճանոյշ', 'Պերճուհի', 'Ռազմուհի', 'Ռեբեկա', 'Ռիթա', 'Ռուզան', 'Ռուպինա', 'Սաթենիկ', 'Սաթո', 'Սալբի', 'Սահականոյշ', 'Սանահին',
        'Սանան', 'Սանդուխտ', 'Սառա', 'Սեդա', 'Սեւան', 'Սեւանա', 'Սէր', 'Սիրան', 'Սիրանոյշ', 'Սիրոյշ', 'Սիրարփի', 'Սիրուհի', 'Սիրուն',
        'Սիրվարդ', 'Սրբատանոյշ', 'Սոխակ', 'Սողոմէ', 'Սոնա', 'Սոնիա', 'Սոնիկ', 'Սոֆիա', 'Սոֆիկ', 'Սրբուհի', 'Սօսէ', 'Սօսիկ', 'Սօսիւն', 'Վազգանոյշ', 'Վալանդին',
        'Վանէ', 'Վանուհի', 'Վասկանոյշ', 'Վարդանոյշ', 'Վարդուհի', 'Վարդենի', 'Վարդերես', 'Վարդիթեր', 'Վարդինէ', 'Վարսենիկ', 'Վեհանոյշ', 'Վեհանձնուհի', 'Վեհուհի', 'Վերգինէ', 'Վերժին',
        'Վերջալոյս', 'Վրէժուհի', 'Տաթեւիկ', 'Տալիթա', 'Տենչալի', 'Տեսիլ', 'Տիգրանուհի', 'Տիրուկ', 'Տիրուհի', 'Ցօլինէ', 'Ցողիկ', 'Փաթիլ', 'Փայլուն', 'Փառանձեմ', 'Փասիան',
        'Փերուզ', 'Փիւնիկ', 'Քաղրուհի', 'Քնար', 'Քնքուշ', 'Քրիստինէ'
<<<<<<< HEAD
    ];

    protected static $lastName = [
=======
    );

    protected static $lastName = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        'Կարապետյան','Ասատրյան','Հովսեփյան','Մուրադյան','Հովհաննիսյան',
        'Աբգարյան','Գրիգորյան','Կարապետյան','Հայրապետյան','Ավագյան',
        'Պետրոսյան','Պողոսյան','Աբդալյան','Բադալյան','Մելիքյան','Մկրտչյան',
        'Դարբինյան','Կիրակոսյան','Հակոբյան','Խաչատրյան','Վարդանյան',
        'Համբարձումյան','Սարգսյան',
<<<<<<< HEAD
    ];

    protected static $titleMale = ['Պարոն'];

    protected static $titleFemale = ['տիկին','օրիորդ'];

    private static $suffix = ['',];
=======
    );

    protected static $titleMale = array('Պարոն');

    protected static $titleFemale = array('տիկին','օրիորդ');

    private static $suffix = array('',);
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * @example 'PhD'
     */
    public static function suffix()
    {
        return static::randomElement(static::$suffix);
    }
}
