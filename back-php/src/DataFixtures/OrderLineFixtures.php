<?php

namespace App\DataFixtures;
use App\Entity\OrderLine;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class OrderLineFixtures extends Fixture
{

private const ORDERLINES =
                           [['o109ef67-12a6-4e3f-a638-3427d24375f4', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p08e4157-77b6-42b2-a28b-e2d30c286525', 23, 3, 69],
                           ['o562ff7e-114c-49bb-bdfb-233b6f8e1574', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p1c951a8-e1e3-476f-8a46-d490125c7ae2', 30, 8, 240],
                           ['oa167418-ae15-4cc4-9670-e3907c1064a7', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p2532b98-574e-4b66-8ce1-518f4f397b61', 9, 3, 27],
                               ['obaaaa40-dcaa-4728-964a-e5952042eb14', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p2d19646-e2e0-4192-b86b-d8f65ba01a08', 8, 35, 280],
                               ['o109ef67-12a6-4e3f-a638-3427d24375f4', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p32975ac-7fc2-46f8-9cfe-87afacb9097d', 4, 30, 120],
                               ['of5b237d-7dad-4144-8337-e10f5c54289a', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p38c4b31-a60d-4b6f-99bd-3cfcb221d177', 8, 3, 24],
                               ['o576fa3b-788f-42d7-b565-c74736270874', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p44115f3-8cd4-4e98-8af8-da227369652c', 30, 5, 150],
                               ['o11bf2a7-728e-4940-bd81-c74739a51105', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p49c664b-f099-42db-a050-42492eaa7b53', 10, 5, 50],
                               ['o6b62e34-627d-4024-9a91-ab4547296db9', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p6c0cb63-33f1-4e61-b52e-3790fb7e2555', 22, 3, 66],
                               ['o34d06e4-c416-468b-b773-dc7d6681459c', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p7c9be63-21e0-4e22-b3bc-6d12387b4d77', 23, 2, 46],
                               ['oee6f89b-4418-4843-897f-d19e3d8d84a9', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p80b6f6c-fe84-4187-8ec1-8b2634a56e4f', 9, 6, 54],
                               ['o1a9dd29-0ee7-4af0-9b4a-3057da808239', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p84d2b56-6429-491a-a185-83b5efb53cc5', 2, 3, 6],
                               ['oee6f89b-4418-4843-897f-d19e3d8d84a9', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p88f469f-b057-424b-b273-9bcf5cec6fd0', 4, 13, 52],
                               ['of5b237d-7dad-4144-8337-e10f5c54289a', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p8dc11b4-ef19-4066-b388-b4a63d6cef20', 5, 11, 55],
                               ['od3a875b-196f-4620-81da-e08a4f8cf214', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p98936f9-f9f7-463e-af24-77caa9d84f00', 8, 1, 8],
                               ['o34d06e4-c416-468b-b773-dc7d6681459c', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p9b1c9a8-85e2-4678-b682-f0cbfbce5f3b', 2, 30, 60],
                               ['oee6f89b-4418-4843-897f-d19e3d8d84a9', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p9de0e26-0c75-48fe-88ec-0b05716ec330', 10, 22, 220],
                               ['oee6f89b-4418-4843-897f-d19e3d8d84a9', '940e487e-6844-40b7-8009-7c0c8608f52f', 'paf96a0d-405f-488d-81b1-417cff842954', 30, 6, 180],
                               ['of5b237d-7dad-4144-8337-e10f5c54289a', '940e487e-6844-40b7-8009-7c0c8608f52f', 'pb01996a-7322-4dc0-94eb-ecb62db2aace', 24, 7, 168],
                               ['oa167418-ae15-4cc4-9670-e3907c1064a7', '940e487e-6844-40b7-8009-7c0c8608f52f', 'pb023068-2b88-492b-bbfb-8a33a6c362b3', 11, 3, 33],
                               ['of5b237d-7dad-4144-8337-e10f5c54289a', '940e487e-6844-40b7-8009-7c0c8608f52f', 'pbc77120-64a7-4c53-90ac-77a13f9f157b', 33, 5, 165],
                               ['o29a6756-3732-46c4-8e28-0c69e1c6ce87', '940e487e-6844-40b7-8009-7c0c8608f52f', 'pc0507d9-bef3-4e67-adae-5fdd9a9cb0b5', 10, 10, 100],
                               ['o1a9dd29-0ee7-4af0-9b4a-3057da808239', '940e487e-6844-40b7-8009-7c0c8608f52f', 'pc91fee3-e529-47fb-bed5-a46e01be7225', 12, 5, 60],
                               ['o109ef67-12a6-4e3f-a638-3427d24375f4', '940e487e-6844-40b7-8009-7c0c8608f52f', 'pdc2184f-abcb-4dd7-b9a4-556946f810ee', 20, 15, 300],
                               ['o109ef67-12a6-4e3f-a638-3427d24375f4', '940e487e-6844-40b7-8009-7c0c8608f52f', 'pf2169d1-e161-4dec-9f7c-56bd1848a5dc', 9, 7, 63],
                               ['obaaaa40-dcaa-4728-964a-e5952042eb14', '940e487e-6844-40b7-8009-7c0c8608f52f', 'pf2296e9-9410-4c38-9170-3557f10145b0', 11, 4, 44],
                               ['o576fa3b-788f-42d7-b565-c74736270874', '940e487e-6844-40b7-8009-7c0c8608f52f', 'pf63efa6-ab03-4cd4-895b-08acb74028be', 23, 10, 230],
                               ['oa167418-ae15-4cc4-9670-e3907c1064a7', '940e487e-6844-40b7-8009-7c0c8608f52f', 'pf8d6aaf-b766-4e71-a551-0ae7ae970a5f', 14, 21, 294],
                               ['oa167418-ae15-4cc4-9670-e3907c1064a7', '940e487e-6844-40b7-8009-7c0c8608f52f', 'pf982406-2f6a-4fe3-b872-e9ff02cd9932', 2, 7, 14],
                               ['o6b62e34-627d-4024-9a91-ab4547296db9', '940e487e-6844-40b7-8009-7c0c8608f52f', 'pfc50924-609d-4ded-9ea8-314c8af26b49', 21, 4, 84],
                               ['oa949c85-9e77-4c9c-931b-d938f131747b', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p52e0c01-5913-4427-9caa-9631025b7ecf', 23, 1, 23],
                               ['o576fa3b-788f-42d7-b565-c74736270874', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p44115f3-8cd4-4e98-8af8-da227369652c', 30, 1, 30],
                               ['o5fc1f03-d1ca-4ea9-aff6-6f38df81e860', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p7b5b32b-eb8c-4066-8568-f04eef7a72ee', 9, 1, 9],
                               ['ob23818f-5430-428f-ac2e-7052eca3d0f2', '940e487e-6844-40b7-8009-7c0c8608f52f', 'pfd525bc-1ac1-4098-bada-638b18618049', 8, 8, 64],
                               ['o29a6756-3732-46c4-8e28-0c69e1c6ce87', '940e487e-6844-40b7-8009-7c0c8608f52f', 'pc0507d9-bef3-4e67-adae-5fdd9a9cb0b5', 4, 10, 40],
                               ['o0363157-7a29-4198-8857-813abedfc066', '940e487e-6844-40b7-8009-7c0c8608f52f', 'paab76f2-fa4d-479a-b5dd-9b9d3040fde0', 8, 2, 16],
                               ['of5b237d-7dad-4144-8337-e10f5c54289a', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p8dc11b4-ef19-4066-b388-b4a63d6cef20', 30, 2, 60],
                               ['od686ee1-e29e-4163-aa7b-d03990ca41c2', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p45432be-ac70-4708-a6c7-13ac05a5c7c0', 10, 7, 70],
                               ['o3f121da-de0a-4cee-8b94-1da4a2d1a2d3', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p51ab9f4-36d9-41ff-b9da-59f299756747', 22, 1, 22],
                               ['o1a9dd29-0ee7-4af0-9b4a-3057da808239', '940e487e-6844-40b7-8009-7c0c8608f52f', 'pc91fee3-e529-47fb-bed5-a46e01be7225', 23, 10, 230],
                               ['od3a875b-196f-4620-81da-e08a4f8cf214', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p98936f9-f9f7-463e-af24-77caa9d84f00', 9, 1, 9],
                               ['o8c1f5df-e241-4f66-a72e-d27a4d785758', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p59d8d8e-8e80-4917-9f8f-38efedf2fec9', 2, 11, 22],
                               ['o109ef67-12a6-4e3f-a638-3427d24375f4', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p08e4157-77b6-42b2-a28b-e2d30c286525', 4, 1, 4],
                               ['of10240f-c129-4996-b167-02f7337a8605', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p36e443c-6343-46ac-a96a-e441c22fd6d7', 5, 117, 585],
                               ['of5b237d-7dad-4144-8337-e10f5c54289a', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p38c4b31-a60d-4b6f-99bd-3cfcb221d177', 8, 3, 24],
                               ['o0363157-7a29-4198-8857-813abedfc066', '940e487e-6844-40b7-8009-7c0c8608f52f', 'pb2475f4-5fdd-415c-8f04-0320e4b6df55', 2, 7, 14],
                               ['o98c7e46-0b18-4235-b144-ed1736cfa5c1', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p587ccc8-b49a-4612-9311-cc1c10192ead', 10, 4, 40],
                               ['ofba078c-2fcc-4ae0-9e97-b29de32be405', '940e487e-6844-40b7-8009-7c0c8608f52f', 'pa587251-9e68-418c-aa55-b701123899af', 9, 1, 9],
                               ['ofba078c-2fcc-4ae0-9e97-b29de32be405', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p27ec002-80d5-4570-9863-93d1f9eee281', 24, 1, 24],
                               ['oa167418-ae15-4cc4-9670-e3907c1064a7', '940e487e-6844-40b7-8009-7c0c8608f52f', 'pf8d6aaf-b766-4e71-a551-0ae7ae970a5f', 8, 1, 8],
                               ['oee6f89b-4418-4843-897f-d19e3d8d84a9', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p88f469f-b057-424b-b273-9bcf5cec6fd0', 9, 1, 9],
                               ['obb555d6-14b6-4aed-8862-2af4ba2bc588', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p89bf8e1-d3f3-49da-89b9-9ccb74dad72e', 10, 11, 110],
                               ['o109ef67-12a6-4e3f-a638-3427d24375f4', '940e487e-6844-40b7-8009-7c0c8608f52f', 'pdc2184f-abcb-4dd7-b9a4-556946f810ee', 8, 1, 8],
                               ['oee6f89b-4418-4843-897f-d19e3d8d84a9', '940e487e-6844-40b7-8009-7c0c8608f52f', 'paf96a0d-405f-488d-81b1-417cff842954', 4, 1, 4],
                               ['o72e1ccd-47be-4f94-bfd0-b8f96df39f2a', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p7d5f383-7597-4091-83cb-929c02e08e6a', 9, 1, 9],
                               ['obb555d6-14b6-4aed-8862-2af4ba2bc588', '940e487e-6844-40b7-8009-7c0c8608f52f', 'pa0b5371-25b1-4f53-93ba-801c4d367513', 8, 7, 56],
                               ['o0363157-7a29-4198-8857-813abedfc066', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p61ba2a8-1522-4ac5-9e2d-18cf0df70216', 4, 22, 88],
                               ['o3f121da-de0a-4cee-8b94-1da4a2d1a2d3', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p867e7a2-b53e-40bc-bfdd-5b5e2257f0e5', 8, 1, 8],
                               ['of8ebc75-5974-47a4-9ecb-8078b18d1906', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p2d4665b-e1b8-4088-94fc-4cb8bf8263e8', 30, 1, 30],
                               ['o98c7e46-0b18-4235-b144-ed1736cfa5c1', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p80bb359-f92e-4cb6-8be0-4c4e97375251', 10, 4, 40],
                               ['ob23818f-5430-428f-ac2e-7052eca3d0f2', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p40038af-b540-488e-974c-d546e83c05e6', 22, 1, 22],
                               ['o52ea718-b44d-4c02-b7a7-7ac7fd55b8b0', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p1e55731-09bd-40e0-91fe-c33f8603feff', 23, 1, 23],
                               ['o34d06e4-c416-468b-b773-dc7d6681459c', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p9b1c9a8-85e2-4678-b682-f0cbfbce5f3b', 9, 1, 9],
                               ['o55d302e-85a3-46cb-b7b9-3dfba65ada4b', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p7997d00-0ee6-4610-8b63-a4fbc2ba59e2', 2, 3, 6],
                               ['obb555d6-14b6-4aed-8862-2af4ba2bc588', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p7a0cc72-2b3d-4b58-814f-ee8472e1149e', 4, 2, 8],
                               ['obaaaa40-dcaa-4728-964a-e5952042eb14', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p2d19646-e2e0-4192-b86b-d8f65ba01a08', 5, 35, 175],
                               ['o55d302e-85a3-46cb-b7b9-3dfba65ada4b', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p9a7e396-1fc7-40d3-95b9-5bd181fe5d92', 8, 2, 16],
                               ['of10240f-c129-4996-b167-02f7337a8605', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p0e3e0c2-48d4-4339-b30c-5521d4c3c45d', 2, 1, 2],
                               ['o37adf02-0ddc-4d50-8068-e2ea14483da6', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p52b91f3-f217-4c3e-8134-660812e72f15', 10, 1, 10],
                               ['o6b62e34-627d-4024-9a91-ab4547296db9', '940e487e-6844-40b7-8009-7c0c8608f52f', 'pfc50924-609d-4ded-9ea8-314c8af26b49', 30, 1, 30],
                               ['od686ee1-e29e-4163-aa7b-d03990ca41c2', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p4b1fde9-6480-4174-9e9a-0210b111892c', 24, 8, 192],
                               ['o11bf2a7-728e-4940-bd81-c74739a51105', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p49c664b-f099-42db-a050-42492eaa7b53', 12, 1, 12],
                               ['ocd749ce-87bb-4a3e-9587-6929a32eed92', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p3abf22a-3cab-42a5-b115-5df2da6bfe69', 3, 2, 6],
                               ['of8ebc75-5974-47a4-9ecb-8078b18d1906', '940e487e-6844-40b7-8009-7c0c8608f52f', 'pc2dfcd4-36d1-4d14-b0d1-62007b8f773f', 10, 1, 10],
                               ['o52ea718-b44d-4c02-b7a7-7ac7fd55b8b0', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p799233f-c5c2-4d6f-943b-c254f0e33568', 23, 1, 23],
                               ['ofba078c-2fcc-4ae0-9e97-b29de32be405', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p8ccc0ef-fed6-46ca-b868-4f4ec4e996b1', 30, 8, 240],
                               ['o6b62e34-627d-4024-9a91-ab4547296db9', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p9f6ed1e-0701-438a-ab6b-9600af4b1506', 9, 4, 36],
                               ['obaaaa40-dcaa-4728-964a-e5952042eb14', '940e487e-6844-40b7-8009-7c0c8608f52f', 'pf2296e9-9410-4c38-9170-3557f10145b0', 10, 4, 40],
                               ['of8ebc75-5974-47a4-9ecb-8078b18d1906', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p611d765-8a00-4d20-8177-42285f0121d0', 4, 41, 164],
                               ['ofba078c-2fcc-4ae0-9e97-b29de32be405', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p394ac4a-7884-4a24-83bd-97b02335dba4', 8, 3, 24],
                               ['oee6f89b-4418-4843-897f-d19e3d8d84a9', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p9de0e26-0c75-48fe-88ec-0b05716ec330', 11, 2, 22],
                               ['oa167418-ae15-4cc4-9670-e3907c1064a7', '940e487e-6844-40b7-8009-7c0c8608f52f', 'pb023068-2b88-492b-bbfb-8a33a6c362b3', 10, 3, 30],
                               ['o5449107-ed71-43aa-9dde-7dfb2cff6c0f', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p2347db6-db21-40e4-9a0d-c309b26e565a', 22, 6, 132],
                               ['obb555d6-14b6-4aed-8862-2af4ba2bc588', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p3afa882-13ec-4ac8-a8af-15cbb3f68432', 23, 5, 115],
                               ['oee6f89b-4418-4843-897f-d19e3d8d84a9', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p80b6f6c-fe84-4187-8ec1-8b2634a56e4f', 9, 6, 54],
                               ['o3f121da-de0a-4cee-8b94-1da4a2d1a2d3', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p403d620-3542-4bbd-9a87-b8ce5643ea3b', 2, 7, 14],
                               ['ocd749ce-87bb-4a3e-9587-6929a32eed92', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p6749091-5ad1-4ec2-a0dd-2221200cb264', 9, 2, 18],
                               ['o5449107-ed71-43aa-9dde-7dfb2cff6c0f', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p7e3f247-9d3c-43a5-80f4-e5013a7b69c0', 5, 12, 60],
                               ['od686ee1-e29e-4163-aa7b-d03990ca41c2', '940e487e-6844-40b7-8009-7c0c8608f52f', 'p3087dea-e955-4f2c-9799-c9f5859ef794', 8, 9, 72],
                               ['oa167418-ae15-4cc4-9670-e3907c1064a7', '940e487e-6844-40b7-8009-7c0c8608f52f', 'pf982406-2f6a-4fe3-b872-e9ff02cd9932', 2, 5, 10]];


    public function load(ObjectManager $manager): void
    {
        foreach (self::ORDERLINES as $ref) {
            $orderlines = new OrderLine();
            $orderlines->setId($ref[0]);
            $orderlines->setSalon($ref[1]);
            $orderlines->setProduct($ref[2]);
            $orderlines->setProductQuantity($ref[3]);
            $orderlines->setProductTotalPrice($ref[4]);
            $orderlines->setProductBasePrice($ref[5]);
            $manager->persist($orderlines);
        }
        $manager->flush();
    }



}
