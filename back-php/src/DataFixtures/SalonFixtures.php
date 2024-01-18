<?php

namespace App\DataFixtures;
use App\Entity\Salon;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;


class SalonFixtures extends Fixture
{

    private const SALONS =
        [['940e487e-6844-40b7-8009-7c0c8608f52f', 'THE TIF', 44100, 'NANTES'],
            ['1177ad47-18fc-4cea-b365-8d3d916393c2', 'SYLVIE COIFFURE', 21121, 'DAROIS'],
            ['039a3421-d2fd-4363-aeb6-2a5540dcbeef', 'SALON PAULE ET GERARD', 59450, 'SIN-LE-NOBLE'],
            ['c012f235-80d3-4ab7-9719-484694adb24a', 'SENSUALITY', 97600, 'MAMOUDZOU'],
            ['72af9cad-42df-456f-91f1-9dc73a16784f', 'J.M.G', 75008, 'PARIS 8'],
            ['62939baf-43cc-4508-b2d0-28bbe254ec40', 'SAINT ALGUE COIFFURE', 38130, 'ECHIROLLES'],
            ['db6dba69-6d62-4211-92da-d5639a7b9168', 'PRIVILEGE', 6000, 'NICE'],
            ['54ec692e-1f63-4b86-b61b-06ec3ed3f290', 'COIFFURE CHANTAL', 59570, 'BAVAY'],
            ['60a6fa09-ca6d-4255-8081-eb99c8ca3ec6', 'COIFFURE WISS PIERRE', 67114, 'ESCHAU'],
            ['4450d5bd-8544-4a81-b278-4746d4e98120', 'JACQUES DESSANGE', 75007, 'PARIS 7'],
            ['d1bc265a-6262-4471-b4f9-f21c1ec53cb1', 'COIFFURIO', 35200, 'RENNES'],
            ['c267b3e9-063d-4726-b41a-e0cea58e13e7', 'ALEXIS', 24120, 'TERRASSON-LAVILLEDIEU'],
            ['81654b6c-cfbb-4508-a097-9c9a8e6262c6', 'COIFFURE CHRIS\'STYLE', 25200, 'MONTBELIARD'],
            ['5d2f07ee-da12-4baa-8c80-7a2afdb7eb56', 'HAIR COIFFURE', 11100, 'NARBONNE'],
            ['a0512943-9fe7-479c-9b06-a8c5a4d4542c', 'MARTINE COIFFURE', 86170, 'CISSE'],
            ['edb932ed-aa43-470f-a92f-ec483d5b3089', 'HAIR SHOP CREATION CENTRE ESTHETIQUE CAPILLAIRE', 83000, 'TOULON'],
            ['b3c54514-88e1-4a3a-ac59-7a526529eb25', 'JOEL ET ALAIN', 76120, 'LE GRAND-QUEVILLY'],
            ['e93d3880-f920-4b61-b12a-e67f51dbeded', 'SALON FRANCK', 57365, 'ENNERY'],
            ['32150584-d99b-489a-8369-8c548c56520d', 'PATRICK ROLLAND', 75016, 'PARIS 16'],
            ['871dcc33-ab6b-4a9c-ac66-957666f3cc90', 'COIFF\'MOI', 10000, 'TROYES'],
            ['3f04963f-53c6-490f-a047-0456104f4c36', 'MARIE COIFF', 59111, 'LIEU-SAINT-AMAND'],
            ['af84dfc7-6e5f-48e1-b5f8-d4d0274ca1da', 'REGIS COIFFURE', 33230, 'COUTRAS'],
            ['88afaa95-26e8-4617-8446-c8e5a3effce5', 'SALON GERARD', 42153, 'RIORGES'],
            ['ceca4460-fcec-4d95-b28b-1eb01b40c364', 'SALON MARIE PAULE', 59330, 'NEUF-MESNIL'],
            ['e5574195-4052-4a75-bf2b-90508ca46b41', 'CHRISTINE FERNANDEZ BERGOUGNOUX', 19120, 'LIOURDRES'],
            ['b5a7d10b-d8ea-48fe-8c41-96db22bbcf9c', 'COIFFURE HUGUETTE LASCOMBES', 32230, 'MARCIAC'],
            ['19edb8cb-fe67-40c0-9e11-505d4173e988', 'MARC THIERRY', 38100, 'GRENOBLE'],
            ['61af440f-a5bc-40e2-8018-f871564c5fb6', 'LUCIE SAINT-CLAIR', 75008, 'PARIS 8'],
            ['a6093a6c-0bd7-4adc-8d38-a6db7476c17d', 'CABINET ENERGETIQUE', 97300, 'CAYENNE'],
            ['ac4b9772-8a86-4886-84f3-db3ab29c056d', 'COIFFURE MARITHE', 69410, 'CHAMPAGNE AU MONT D\'OR'],
            ['895874b6-5ab4-49d4-9763-00cba2496a47', 'HAIRDRESSER', 83400, 'HYERES'],
            ['70519315-b644-4bb6-888b-2cbbe3ab4e7a', 'VINTAGE', 20000, 'AJACCIO'],
            ['30752bd4-b001-4696-a952-b542c4ea0bdc', 'PHILIPPE JOUAN', 75018, 'PARIS 18'],
            ['81c9bbbe-2ca4-49b9-aca6-b746c39b018f', 'SALON NICOLE', 62400, 'BETHUNE'],
            ['91028b89-8745-447f-b5c3-dffad04ae34e', 'JOE ESTHETIQUE', 6200, 'NICE'],
            ['96163b5f-5202-465f-8f88-42234d8636a0', 'PART DIEU COIFFURE', 69003, 'LYON 3EME'],
            ['eb345c9e-cec9-4c38-8b06-5e9bc4e0de82', 'HORIZON COIFFURE', 11370, 'LEUCATE'],
            ['349a4fa2-71b4-42e3-bb21-3b0513cf4809', 'AMAZONE COIFFURE', 80620, 'FRANQUEVILLE'],
            ['8245d98a-10af-4d90-866b-c723c552df10', 'THOMAS COIFFURE', 6800, 'CAGNES-SUR-MER'],
            ['15ca0942-2d56-4736-a6f9-8cf14f1873f3', 'NUANCES COIFFURE', 59800, 'LILLE'],
            ['295564d0-2747-4baa-b918-e16d15664416', 'JB COIFFURE', 31870, 'LAGARDELLE-SUR-LEZE'],
            ['a8e10999-3937-4ea6-8457-e998c769ec65', 'CATHERINE COIFFURE MIXTE', 21200, 'BEAUNE'],
            ['4ca04aff-affb-41f3-8bfc-fa324bbf2e02', 'SALON JENNIFER', 69002, 'LYON 2EME'],
            ['de9f0d6c-46de-4f15-be60-60877811c5f0', 'ART BIGOUDI', 44100, 'NANTES'],
            ['564dfddf-212c-4c31-9ef2-10549e1e1e1a', 'EURO COIFF\'', 59163, 'CONDE SUR L\'ESCAUT'],
            ['082f80b5-8358-4596-a712-7dbf0beff917', 'JEFF\'CO', 31800, 'SAINT-GAUDENS'],
            ['9c9309e4-12a2-4a21-8421-008c491e326c', 'BIGOUDI COIFFURE', 75017, 'PARIS 17'],
            ['ac9d031d-92c2-4e85-9f7c-d61c8f6eceda', 'JOCE COIFFURE', 73200, 'ALBERTVILLE'],
            ['ab5be662-5b63-40ec-91ef-a28250ce3212', 'AU PAYRA COIFFURE', 66000, 'PERPIGNAN'],
            ['dfc48f2f-d4a1-4709-abc8-d1d42fba275e', 'F.B. MASCULIN FEMININ', 9330, 'MONTGAILHARD'],
            ['459eb309-11ab-4ac0-be91-8475eeedb96a', 'COIFFURE ROCHE', 43130, 'RETOURNAC'],
            ['f1417484-04d8-4e6f-9b5d-0c57443e66a3', 'SALON FABIENNE', 35700, 'RENNES'],
            ['7daad0c4-fac5-4a78-86be-bc63e3ec857c', 'SALON DOMINIQUE', 20200, 'BASTIA'],
            ['05e997b8-8852-43fd-9c05-77646e510f62', 'COIFFURE PSYCHE', 73120, 'COURCHEVEL'],
            ['2b60fe41-8b2f-444b-827a-f7861962e85f', 'GHISLAIN COIFFURE', 51120, 'SEZANNE'],
            ['1449734a-0279-4574-bc23-cc2a2fa420b8', 'NELLY COIFFURE', 63000, 'CLERMONT-FERRAND'],
            ['c4a705ee-03c1-4b97-9576-1609aec6614e', 'STEF SALON JEAN GERALD', 51200, 'EPERNAY'],
            ['e61eecf0-911e-4e69-a9f1-d41fcab804fb', 'ART-COUPE SERGE LECONTE', 76600, 'LE HAVRE'],
            ['cf2ab1b2-378b-4a83-b727-3c86c6cd3f72', 'BELL MECHES', 94300, 'VINCENNES'],
            ['d8308500-df9b-48db-8a1b-1edf616746fc', 'PROVENCE COIFFURE', 13440, 'CABANNES'],
            ['b44f81ab-00d7-4366-b119-bf5b2ca261b1', 'ESPACE COIFFURE', 62420, 'BILLY-MONTIGNY'],
            ['ca153bf9-a19c-41f9-ac02-4dc321c7aae2', 'IDEE COIFF', 62113, 'LABOURSE'],
            ['909c5911-7b5b-45a6-bb90-5ec97634d7df', 'SALON FREDERICK', 62610, 'ARDRES'],
            ['5600d8ac-249c-40e2-a61e-5efe593539a9', 'SALON KIM ET ROLAND', 6160, 'ANTIBES'],
            ['af17a6a6-0308-4157-a0a0-9c218252d4ac', 'ILDIKO COIFFURE', 78590, 'NOISY-LE-ROI'],
            ['005beb37-6e0b-4986-a968-86788fafa671', 'ELLE COIFFURE', 40440, 'ONDRES'],
            ['abd6f5de-314b-4f60-8011-44eec70d9499', 'SALON DE COIFFURE DARGENTOLLE', 88410, 'MONTHUREUX-SUR-SAONE'],
            ['46518ced-2fbb-4550-92ec-a903fdd974c1', 'SALON SERGE', 62520, 'LE TOUQUET-PARIS-PLAGE'],
            ['d9352d0b-f681-41e9-afdc-5355bf9a5b44', 'INTUI\'TIF', 69005, 'LYON 5EME'],
            ['9cc7b5bb-b840-42fe-8810-1d104b07673a', 'SALON MARIO MARCEL', 6000, 'NICE'],
            ['da7ba88f-f638-477a-a2b3-9325d0c2ca51', 'LEA COIFFURE', 62116, 'BUCQUOY'],
            ['964406b8-6528-4e79-81ec-011568419487', 'NEW LOOK COIFFURE', 49680, 'VIVY'],
            ['740527dc-37c6-499a-80a8-90e4f966f84a', 'DANIEL COIFFURE', 75011, 'PARIS 11'],
            ['9768af9d-9494-4e92-b45a-1c46d6eb36e8', 'RACINE CARREE COIFFURE', 18500, 'MEHUN-SUR-YEVRE'],
            ['2501cb23-2899-49a4-9502-6a21d2b84ec0', 'SALON CHRISTIANE', 65130, 'CAPVERN'],
            ['fdfa5436-27e1-4ea6-8920-0c32c27a8f39', 'CREA TIFS', 6130, 'GRASSE'],
            ['6a13c897-6a04-431e-969c-5eda98daa0ba', 'TANAGRA', 44600, 'SAINT-NAZAIRE'],
            ['3c31be56-26ea-44e4-8923-1c9b250d5d37', 'ARNO COIFFE', 67130, 'LUTZELHOUSE'],
            ['b71b5d82-6721-44c3-9ec4-1f25c9ea888b', 'OPTIMA COIFFURE', 21000, 'DIJON'],
            ['5889f617-7b5f-4a6d-87c4-8a7cd4692178', 'HOLLYWOOD HAIR', 76470, 'LE TREPORT'],
            ['fb1b3770-806f-43e5-aa8c-8b50ae1f9cb9', 'MELODIE COIFFURE', 57160, 'MOULINS-LES-METZ'],
            ['9328ee33-9b22-4751-b81e-13709e41ff6a', 'SALON DIDIER', 54000, 'NANCY'],
            ['3de31d78-aef1-4bf8-a6bd-1700753253c1', 'ELYSEE COIFFURE', 46000, 'CAHORS'],
            ['3fc6dac4-1215-415c-9781-bcf070978167', 'L\'COIFFURE', 58190, 'TANNAY'],
            ['d456e3f4-c17c-4f9d-a29f-e87f525fc070', 'FRANCK PROVOST', 75015, 'PARIS 15'],
            ['6ae1fd78-c570-45c3-86dd-415df3c36b16', 'SALON MIREILLE', 85000, 'LA ROCHE-SUR-YON'],
            ['952c1301-d4fd-4449-93c4-8a5dcff30c71', 'ESPACE MICK COIFFURE', 91480, 'QUINCY-SOUS-SENART'],
            ['3ab072c5-2401-4f52-b3de-5ca6e8c4dfff', 'FLAUBERT COIFFURE', 35300, 'FOUGERES'],
            ['4e95f555-4b7f-43bb-8ca3-3d10549b6fcb', 'JEAN LUC MERAT', 75001, 'PARIS 1'],
            ['0c9e4bb1-a6a3-4f3c-bc4e-f4a35f27cb22', 'METAMORPHOSE FEELING', 94100, 'SAINT-MAUR-DES-FOSSES'],
            ['0561eec9-676a-4404-ba34-4337f3d1a32b', 'SALON JF WELTER', 69270, 'FONTAINES-SUR-SAONE'],
            ['de5d1058-ed53-4f8d-b4bd-2a67bea9b75c', 'MARYLENE COIFFURE', 86000, 'POITIERS'],
            ['e1192ccd-547c-49d6-a87d-d9123e5761ba', 'SHOP COIFF', 14600, 'LA RIVIERE-SAINT-SAUVEUR'],
            ['9a51e10c-30e4-4bd0-8e46-0db5db2257ed', 'HAIR COSMETIC DIFFUSION', 97200, 'FORT-DE-FRANCE'],
            ['fbc5e692-1ecc-4355-8a62-3077a3eab61a', 'COIFFURE MIREILLE', 45200, 'MONTARGIS'],
            ['af6c6448-1272-490e-b662-30ace9ba720f', 'XAVIER COIFFURE', 61290, 'LONGNY LES VILLAGES'],
            ['93281e73-a48c-4b08-a7da-cfc26e45ee8a', 'LABATUT VIVIANE', 9500, 'MIREPOIX'],
            ['bd76d98b-4145-4316-a18b-ba5000949d4e', 'FEMINA COIFFURE', 30240, 'LE GRAU-DU-ROI'],
            ['b6a9f457-03b9-4bfe-b6d1-07412c2e8960', 'C DANS L\'HAIR', 13160, 'CHATEAURENARD'],
            ['15345bda-89c1-4c55-93a4-fc6ee80c3e95', 'J COIFFURE', 76770, 'MALAUNAY'],
            ['06f8a2e0-b8f8-4905-9649-9d8b9ccc275c', 'ALAIN PICOT COIFFURE', 63100, 'CLERMONT-FERRAND'],
            ['3742766b-23c9-46d1-aacc-dbed3e1d0e35', 'STYLE COIFFURE', 20620, 'BIGUGLIA'],
            ['6b9a26b8-cae3-41cc-9f44-e588382080b1', 'SALON CHANTAL', 90100, 'JONCHEREY'],
            ['274d5d8c-75f7-4dd5-ae17-145a01a8bd3c', 'COIFFURE VASSALO', 6700, 'SAINT-LAURENT-DU-VAR'],
            ['81382d59-0f38-49b8-b630-aec012b1e4ef', 'LA BRECHERIE', 94000, 'CRETEIL'],
            ['4c9605ef-2d19-4c64-a8f5-b28cc2f4b762', 'TOUTES BELLES', 97490, 'SAINT-DENIS'],
            ['37aefe6c-a515-48b9-ba68-ed1de1471c67', 'COIFFURE GIORGIA', 6190, 'ROQUEBRUNE-CAP-MARTIN'],
            ['4c363f9e-ad0f-4b3e-8cbe-6eb16d8d6e92', 'COIFFURE MASCULINE', 67120, 'MOLSHEIM'],
            ['4099fdc0-1c31-434f-b3b5-1dbf9b5033e1', 'DOM S SCALP', 83560, 'SAINT-JULIEN'],
            ['62eb5d7d-5fcc-4fa7-b81a-04c42d42371c', 'SALON MINICK', 33000, 'BORDEAUX'],
            ['d303d073-4bfc-4055-81fa-bdd9d6d799dd', 'L\'APPARTEMENT', 25000, 'BESANCON'],
            ['2d641536-4904-4b5f-9624-33020042607c', 'LES COIFFEURS DU QUARTIER', 13100, 'AIX-EN-PROVENCE'],
            ['97dd7e56-e3d8-48de-86ea-7d66627dc720', 'MARCO AND CO', 75019, 'PARIS 19'],
            ['07b7c4c2-4f48-4678-90d7-964bdd68bc0b', 'ANNICK COIFFURE', 45770, 'SARAN'],
            ['6744f594-64a6-455f-b0ba-7d908fa31f59', 'COIFFURE HARMONIE', 86240, 'LIGUGE'],
            ['bf9b74db-3dc4-47f0-b91e-a61da0b286d0', 'BETTY COIFFURE', 29810, 'PLOUMOGUER'],
            ['ce72e2d4-45cf-4621-971b-87c76c3d3f28', 'GERARD\'S', 83000, 'TOULON'],
            ['39006650-9285-4878-b097-e0c7070530dc', 'HAIR VOGUE COIFFURE', 44000, 'NANTES'],
            ['45b7eeee-eb2b-469a-ad85-ba2dee8297df', 'CHEZ LUCAY COIFFEUR MIXTE', 97400, 'SAINT-DENIS']];

    public function load(ObjectManager $manager): void
    {
        foreach (self::SALONS as $ref) {
            $salon = new Salon();
            $salon->setId($ref[0]);
            $salon->setSalonName($ref[1]);
            $salon->setPostalCode($ref[2]);
            $salon->setSalonCity($ref[3]);
            $manager->persist($salon);
        }

        $manager->flush();
    }



}
