<?php

namespace App\DataFixtures;
use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;


class ProductFixtures extends Fixture
{

    private const PRODUCTS =
        [['p1c951a8-e1e3-476f-8a46-d490125c7ae2', 'Kerastase', 'Such Theory', 'Cheveux', '15-25', 'Mi-long', 'Frise', 'Equilibre', 'kerastase1.jpg'],
            ['p2532b98-574e-4b66-8ce1-518f4f397b61', 'Kerastase', 'Weight Once', 'Cheveux', '25-55', 'Long', 'Lisse', 'Sec', 'kerastase2.jpg'],
            ['p2d19646-e2e0-4192-b86b-d8f65ba01a08', 'Kerastase', 'Society Really', 'Cheveux', '55-99', 'Long', 'Ondule', 'Equilibre', 'kerastase3.jpg'],
            ['p6c0cb63-33f1-4e61-b52e-3790fb7e2555', 'Kerastase', 'Single Moment', 'Cheveux', '55-99', 'Mi-long', 'Lisse', 'Equilibre', 'kerastase4.jpg'],
            ['p80b6f6c-fe84-4187-8ec1-8b2634a56e4f', 'Kerastase', 'Down Walk', 'Cheveux', '15-25', 'Long', 'Ondule', 'Gras', 'kerastase5.jpg'],
            ['paf96a0d-405f-488d-81b1-417cff842954', 'Kerastase', 'Late Perform', 'Cheveux', '15-25', 'Long', 'Lisse', 'Sec', 'kerastase6.jpg'],
            ['pb01996a-7322-4dc0-94eb-ecb62db2aace', 'Kerastase', 'Push Wait', 'Cheveux', '55-99', 'Court', 'Ondule', 'Gras', 'kerastase7.jpg'],
            ['pb023068-2b88-492b-bbfb-8a33a6c362b3', 'Kerastase', 'Left Story', 'Cheveux', '25-55', 'Mi-long', 'Frise', 'EquilibrÃ©', 'kerastase8.jpg'],
            ['pbc77120-64a7-4c53-90ac-77a13f9f157b', 'Kerastase', 'Whatever This', 'Cheveux', '25-55', 'Mi-long', 'Lisse', 'Sec', 'kerastase9.jpg'],
            ['pf2169d1-e161-4dec-9f7c-56bd1848a5dc', 'Kerastase', 'List Most', 'Cheveux', '25-55', 'Mi-long', 'Ondule', 'Gras', 'kerastase10.jpg'],
            ['pf63efa6-ab03-4cd4-895b-08acb74028be', 'Kerastase', 'Say Little', 'Cheveux', '15-25', 'Court', 'Lisse', 'Sec', 'kerastase11.jpg'],
            ['pf982406-2f6a-4fe3-b872-e9ff02cd9932', 'Kerastase', 'Feeling Right', 'Cheveux', '25-55', 'Long', 'Ondule', 'Sec', 'kerastase12.jpg'],
            ['pfc50924-609d-4ded-9ea8-314c8af26b49', 'Kerastase', 'Rule Notice', 'Cheveux', '55-99', 'Mi-long', 'Ondule', 'Gras', 'kerastase13.jpg'],
            ['p08e4157-77b6-42b2-a28b-e2d30c286525', 'Loreal Pro', 'Must Decide', 'Cheveux', '15-25', 'Court', 'Frise', 'Equilibre', 'lorealpro1.jpg'],
            ['p32975ac-7fc2-46f8-9cfe-87afacb9097d', 'Loreal Pro', 'Mission Family', 'Cheveux', '25-55', 'Mi-long', 'Lisse', 'Equilibre', 'lorealpro2.jpg'],
            ['p38c4b31-a60d-4b6f-99bd-3cfcb221d177', 'Loreal Pro', 'Class Race', 'Cheveux', '25-55', 'Long', 'Lisse', 'Sec', 'lorealpro3.jpg'],
            ['p44115f3-8cd4-4e98-8af8-da227369652c', 'Loreal Pro', 'Window Thank', 'Cheveux', '15-25', 'Court', 'Lisse', 'Equilibre', 'lorealpro4.jpg'],
            ['p49c664b-f099-42db-a050-42492eaa7b53', 'Loreal Pro', 'Hair Board', 'Cheveux', '55-99', 'Long', 'Ondule', 'Equilibre', 'lorealpro5.jpg'],
            ['p7c9be63-21e0-4e22-b3bc-6d12387b4d77', 'Loreal Pro', 'Rather Several', 'Cheveux', '25-55', 'Long', 'Lisse', 'Gras', 'lorealpro6.jpg'],
            ['p84d2b56-6429-491a-a185-83b5efb53cc5', 'Loreal Pro', 'Whether Large', 'Cheveux', '25-55', 'Long', 'Ondule', 'Sec', 'lorealpro7.jpg'],
            ['p88f469f-b057-424b-b273-9bcf5cec6fd0', 'Loreal Pro', 'Choose Off', 'Cheveux', '15-25', 'Court', 'Ondule', 'Equilibre', 'lorealpro8.jpg'],
            ['p8dc11b4-ef19-4066-b388-b4a63d6cef20', 'Loreal Pro', 'Across Simply', 'Cheveux', '25-55', 'Long', 'Frise', 'Gras', 'lorealpro9.jpg'],
            ['p98936f9-f9f7-463e-af24-77caa9d84f00', 'Loreal Pro', 'Sound Place', 'Cheveux', '25-55', 'Mi-long', 'Ondule', 'Equilibre', 'lorealpro10.jpg'],
            ['p9b1c9a8-85e2-4678-b682-f0cbfbce5f3b', 'Loreal Pro', 'Radio Fire', 'Cheveux', '55-99', 'Court', 'Lisse', 'Sec', 'lorealpro11.jpg'],
            ['p9de0e26-0c75-48fe-88ec-0b05716ec330', 'Loreal Pro', 'Nature Several', 'Cheveux', '25-55', 'Long', 'Ondule', 'Equilibre', 'lorealpro12.jpg'],
            ['pc0507d9-bef3-4e67-adae-5fdd9a9cb0b5', 'Loreal Pro', 'Moment Record', 'Cheveux', '25-55', 'Long', 'Frise', 'Sec', 'lorealpro13.jpg'],
            ['pc91fee3-e529-47fb-bed5-a46e01be7225', 'Loreal Pro', 'Allow Exactly', 'Cheveux', '15-25', 'Court', 'Lisse', 'Equilibre', 'lorealpro14.jpg'],
            ['pdc2184f-abcb-4dd7-b9a4-556946f810ee', 'Loreal Pro', 'Boy Mrs', 'Cheveux', '15-25', 'Mi-long', 'Lisse', 'Equilibre', 'lorealpro15.jpg'],
            ['pf2296e9-9410-4c38-9170-3557f10145b0', 'Loreal Pro', 'Politics Example', 'Cheveux', '55-99', 'Long', 'Lisse', 'Sec', 'lorealpro16.jpg'],
            ['pf8d6aaf-b766-4e71-a551-0ae7ae970a5f', 'Loreal Pro', 'Break Program', 'Cheveux', '55-99', 'Long', 'Lisse', 'Sec', 'lorealpro17.jpg'],
            ['p52e0c01-5913-4427-9caa-9631025b7ecf', 'Kerastase', 'Happen Very', 'Cheveux', '15-25', 'Mi-long', 'Lisse', 'Equilibre', 'kerastase1.jpg'],
            ['p44115f3-8cd4-4e98-8af8-da227369652c', 'Kerastase', 'Sea Job', 'Cheveux', '25-55', 'Long', 'Ondule', 'Sec', 'kerastase2.jpg'],
            ['p7b5b32b-eb8c-4066-8568-f04eef7a72ee', 'Kerastase', 'Near Network', 'Cheveux', '55-99', 'Long', 'Lisse', 'Equilibre', 'kerastase3.jpg'],
            ['pfd525bc-1ac1-4098-bada-638b18618049', 'Kerastase', 'Sell Politics', 'Cheveux', '55-99', 'Mi-long', 'Lisse', 'Equilibre', 'kerastase4.jpg'],
            ['pc0507d9-bef3-4e67-adae-5fdd9a9cb0b5', 'Kerastase', 'Direction Tree', 'Cheveux', '55-99', 'Long', 'Frise', 'Gras', 'kerastase5.jpg'],
            ['paab76f2-fa4d-479a-b5dd-9b9d3040fde0', 'Kerastase', 'List Rule', 'Cheveux', '15-25', 'Long', 'Lisse', 'Sec', 'kerastase6.jpg'],
            ['p8dc11b4-ef19-4066-b388-b4a63d6cef20', 'Kerastase', 'Make International', 'Cheveux', '55-99', 'Court', 'Ondule', 'Gras', 'kerastase7.jpg'],
            ['p45432be-ac70-4708-a6c7-13ac05a5c7c0', 'Kerastase', 'Bring Young', 'Cheveux', '25-55', 'Long', 'Frise', 'Equilibre', 'kerastase8.jpg'],
            ['p51ab9f4-36d9-41ff-b9da-59f299756747', 'Kerastase', 'According Though', 'Cheveux', '25-55', 'Long', 'Lisse', 'Sec', 'kerastase9.jpg'],
            ['pc91fee3-e529-47fb-bed5-a46e01be7225', 'Kerastase', 'Try Approach', 'Cheveux', '25-55', 'Court', 'Ondule', 'Gras', 'kerastase10.jpg'],
            ['p98936f9-f9f7-463e-af24-77caa9d84f00', 'Kerastase', 'Drop Low', 'Cheveux', '15-25', 'Mi-long', 'Frise', 'Sec', 'kerastase11.jpg'],
            ['p59d8d8e-8e80-4917-9f8f-38efedf2fec9', 'Kerastase', 'Hold Hour', 'Cheveux', '55-99', 'Mi-long', 'Ondule', 'Equilibre', 'kerastase12.jpg'],
            ['p08e4157-77b6-42b2-a28b-e2d30c286525', 'Kerastase', 'Economic About', 'Cheveux', '25-55', 'Mi-long', 'Ondule', 'Gras', 'kerastase13.jpg'],
            ['p36e443c-6343-46ac-a96a-e441c22fd6d7', 'Loreal Pro', 'Stand Sound', 'Cheveux', '15-25', 'Court', 'Frise', 'Equilibre', 'lorealpro1.jpg'],
            ['p38c4b31-a60d-4b6f-99bd-3cfcb221d177', 'Loreal Pro', 'Tv Can', 'Cheveux', '55-99', 'Mi-long', 'Lisse', 'Equilibre', 'lorealpro2.jpg'],
            ['pb2475f4-5fdd-415c-8f04-0320e4b6df55', 'Loreal Pro', 'Reduce Along', 'Cheveux', '25-55', 'Long', 'Lisse', 'Sec', 'lorealpro3.jpg'],
            ['p587ccc8-b49a-4612-9311-cc1c10192ead', 'Loreal Pro', 'Class Political', 'Cheveux', '15-25', 'Court', 'Lisse', 'Equilibre', 'lorealpro4.jpg'],
            ['pa587251-9e68-418c-aa55-b701123899af', 'Loreal Pro', 'Way Find', 'Cheveux', '25-55', 'Long', 'Ondule', 'Equilibre', 'lorealpro5.jpg'],
            ['p27ec002-80d5-4570-9863-93d1f9eee281', 'Loreal Pro', 'Administration Name', 'Cheveux', '55-99', 'Court', 'Lisse', 'Equilibre', 'lorealpro6.jpg'],
            ['pf8d6aaf-b766-4e71-a551-0ae7ae970a5f', 'Loreal Pro', 'Research Past', 'Cheveux', '25-55', 'Court', 'Lisse', 'Sec', 'lorealpro7.jpg'],
            ['p88f469f-b057-424b-b273-9bcf5cec6fd0', 'Loreal Pro', 'Life Treatment', 'Cheveux', '15-25', 'Court', 'Ondule', 'Equilibre', 'lorealpro8.jpg'],
            ['p89bf8e1-d3f3-49da-89b9-9ccb74dad72e', 'Loreal Pro', 'Affect Clearly', 'Cheveux', '55-99', 'Long', 'Frise', 'Gras', 'lorealpro9.jpg'],
            ['pdc2184f-abcb-4dd7-b9a4-556946f810ee', 'Loreal Pro', 'Long Box', 'Cheveux', '25-55', 'Mi-long', 'Ondule', 'Equilibre', 'lorealpro10.jpg'],
            ['paf96a0d-405f-488d-81b1-417cff842954', 'Loreal Pro', 'Rock Whole', 'Cheveux', '15-25', 'Court', 'Lisse', 'Sec', 'lorealpro11.jpg'],
            ['p7d5f383-7597-4091-83cb-929c02e08e6a', 'Loreal Pro', 'Quite Worker', 'Cheveux', '55-99', 'Long', 'Lisse', 'Gras', 'lorealpro12.jpg'],
            ['pa0b5371-25b1-4f53-93ba-801c4d367513', 'Loreal Pro', 'Collection Return', 'Cheveux', '15-25', 'Long', 'Ondule', 'Equilibre', 'lorealpro13.jpg'],
            ['p61ba2a8-1522-4ac5-9e2d-18cf0df70216', 'Loreal Pro', 'Adult Whatever', 'Cheveux', '55-99', 'Mi-long', 'Frise', 'Gras', 'lorealpro14.jpg'],
            ['p867e7a2-b53e-40bc-bfdd-5b5e2257f0e5', 'Loreal Pro', 'Since Method', 'Cheveux', '25-55', 'Mi-long', 'Ondule', 'Equilibre', 'lorealpro15.jpg'],
            ['p2d4665b-e1b8-4088-94fc-4cb8bf8263e8', 'Loreal Pro', 'Us Ahead', 'Cheveux', '25-55', 'Mi-long', 'Lisse', 'Sec', 'lorealpro16.jpg'],
            ['p80bb359-f92e-4cb6-8be0-4c4e97375251', 'Loreal Pro', 'May Mention', 'Cheveux', '55-99', 'Long', 'Ondule', 'Sec', 'lorealpro17.jpg'],
            ['p40038af-b540-488e-974c-d546e83c05e6', 'Kerastase', 'Magazine Guy', 'Cheveux', '25-55', 'Long', 'Frise', 'Equilibre', 'kerastase1.jpg'],
            ['p1e55731-09bd-40e0-91fe-c33f8603feff', 'Kerastase', 'Way Nearly', 'Cheveux', '25-55', 'Mi-long', 'Lisse', 'Sec', 'kerastase2.jpg'],
            ['p9b1c9a8-85e2-4678-b682-f0cbfbce5f3b', 'Kerastase', 'Your Get', 'Cheveux', '25-55', 'Mi-long', 'Ondule', 'Equilibre', 'kerastase3.jpg'],
            ['p7997d00-0ee6-4610-8b63-a4fbc2ba59e2', 'Kerastase', 'Effort Challenge', 'Cheveux', '25-55', 'Long', 'Lisse', 'Equilibre', 'kerastase4.jpg'],
            ['p7a0cc72-2b3d-4b58-814f-ee8472e1149e', 'Kerastase', 'And Standard', 'Cheveux', '55-99', 'Mi-long', 'Ondule', 'Gras', 'kerastase5.jpg'],
            ['p2d19646-e2e0-4192-b86b-d8f65ba01a08', 'Kerastase', 'Seat Although', 'Cheveux', '55-99', 'Long', 'Lisse', 'Sec', 'kerastase6.jpg'],
            ['p9a7e396-1fc7-40d3-95b9-5bd181fe5d92', 'Kerastase', 'Tough A', 'Cheveux', '25-55', 'Long', 'Ondule', 'Gras', 'kerastase7.jpg'],
            ['p0e3e0c2-48d4-4339-b30c-5521d4c3c45d', 'Kerastase', 'Night Hospital', 'Cheveux', '15-25', 'Long', 'Frise', 'Gras', 'kerastase8.jpg'],
            ['p52b91f3-f217-4c3e-8134-660812e72f15', 'Kerastase', 'Husband Mr', 'Cheveux', '55-99', 'Court', 'Lisse', 'Sec', 'kerastase9.jpg'],
            ['pfc50924-609d-4ded-9ea8-314c8af26b49', 'Kerastase', 'Democrat Use', 'Cheveux', '15-25', 'Mi-long', 'Ondule', 'Equilibre', 'kerastase10.jpg'],
            ['p4b1fde9-6480-4174-9e9a-0210b111892c', 'Kerastase', 'Pay Term', 'Cheveux', '15-25', 'Mi-long', 'Lisse', 'Gras', 'kerastase11.jpg'],
            ['p49c664b-f099-42db-a050-42492eaa7b53', 'Kerastase', 'Goal May', 'Cheveux', '25-55', 'Long', 'Lisse', 'Equilibre', 'kerastase12.jpg'],
            ['p3abf22a-3cab-42a5-b115-5df2da6bfe69', 'Kerastase', 'Million Career', 'Cheveux', '25-55', 'Mi-long', 'Lisse', 'Gras', 'kerastase13.jpg'],
            ['pc2dfcd4-36d1-4d14-b0d1-62007b8f773f', 'Loreal Pro', 'Task Tax', 'Cheveux', '55-99', 'Court', 'Frise', 'Equilibre', 'lorealpro1.jpg'],
            ['p799233f-c5c2-4d6f-943b-c254f0e33568', 'Loreal Pro', 'View Mention', 'Cheveux', '55-99', 'Mi-long', 'Ondule', 'Equilibre', 'lorealpro2.jpg'],
            ['p8ccc0ef-fed6-46ca-b868-4f4ec4e996b1', 'Loreal Pro', 'War Should', 'Cheveux', '25-55', 'Long', 'Lisse', 'Sec', 'lorealpro3.jpg'],
            ['p9f6ed1e-0701-438a-ab6b-9600af4b1506', 'Loreal Pro', 'Image Week', 'Cheveux', '25-55', 'Long', 'Ondule', 'Equilibre', 'lorealpro4.jpg'],
            ['pf2296e9-9410-4c38-9170-3557f10145b0', 'Loreal Pro', 'Away Party', 'Cheveux', '15-25', 'Long', 'Frise', 'Gras', 'lorealpro5.jpg'],
            ['p611d765-8a00-4d20-8177-42285f0121d0', 'Loreal Pro', 'Body Because', 'Cheveux', '25-55', 'Court', 'Lisse', 'Equilibre', 'lorealpro6.jpg'],
            ['p394ac4a-7884-4a24-83bd-97b02335dba4', 'Loreal Pro', 'Possible Each', 'Cheveux', '25-55', 'Mi-long', 'Lisse', 'Sec', 'lorealpro7.jpg'],
            ['p9de0e26-0c75-48fe-88ec-0b05716ec330', 'Loreal Pro', 'Military Place', 'Cheveux', '55-99', 'Court', 'Ondule', 'Equilibre', 'lorealpro8.jpg'],
            ['pb023068-2b88-492b-bbfb-8a33a6c362b3', 'Loreal Pro', 'Edge Peace', 'Cheveux', '55-99', 'Long', 'Frise', 'Gras', 'lorealpro9.jpg'],
            ['p2347db6-db21-40e4-9a0d-c309b26e565a', 'Loreal Pro', 'Choose Star', 'Cheveux', '25-55', 'Mi-long', 'Ondule', 'Equilibre', 'lorealpro10.jpg'],
            ['p3afa882-13ec-4ac8-a8af-15cbb3f68432', 'Loreal Pro', 'Both True', 'Cheveux', '55-99', 'Court', 'Lisse', 'Sec', 'lorealpro11.jpg'],
            ['p80b6f6c-fe84-4187-8ec1-8b2634a56e4f', 'Loreal Pro', 'Deep Century', 'Cheveux', '15-25', 'Mi-long', 'Ondule', 'Equilibre', 'lorealpro12.jpg'],
            ['p403d620-3542-4bbd-9a87-b8ce5643ea3b', 'Loreal Pro', 'Tonight When', 'Cheveux', '25-55', 'Long', 'Ondule', 'Sec', 'lorealpro13.jpg'],
            ['p6749091-5ad1-4ec2-a0dd-2221200cb264', 'Loreal Pro', 'Here Describe', 'Cheveux', '25-55', 'Court', 'Lisse', 'Sec', 'lorealpro14.jpg'],
            ['p7e3f247-9d3c-43a5-80f4-e5013a7b69c0', 'Loreal Pro', 'Everything Certain', 'Cheveux', '55-99', 'Mi-long', 'Lisse', 'Equilibre', 'lorealpro15.jpg'],
            ['p3087dea-e955-4f2c-9799-c9f5859ef794', 'Loreal Pro', 'Senior Tax', 'Cheveux', '25-55', 'Court', 'Lisse', 'Equilibre', 'lorealpro16.jpg'],
            ['pf982406-2f6a-4fe3-b872-e9ff02cd9932', 'Loreal Pro', 'Nor Argue', 'Cheveux', '25-55', 'Long', 'Ondule', 'Sec', 'lorealpro17.jpg']];


    public function load(ObjectManager $manager): void
    {
        foreach(self::PRODUCTS as $ref) {
            $product = new Product();
            $product->setId($ref[0]);
            $product->setBrand($ref[1]);
            $product->setProductName($ref[2]);
            $product->setProductCategory($ref[3]);
            $product->setAge($ref[4]);
            $product->setHairtype1($ref[5]);
            $product->setHairtype2($ref[6]);
            $product->setHairtype3($ref[7]);
            $product->setPhotoUrl($ref[8]);
            $manager->persist($product);
        }
        $manager->flush();

    }

}
