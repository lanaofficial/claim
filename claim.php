<?php
error_reporting(false);
require_once __DIR__.'/function.php';
$new = new Autoclaim();
$sleep = 0-(time());
while (true){
   if(time() != $sleep) {
      $f = glob(__DIR__."/text/claimurl/*.txt");
      foreach($f as $file){
         $p = $new->getSplit($file);
         foreach($p as $url){
            $cy = explode('&currency=', $url);
            $ce = explode('&', $cy[1]);
            $cur = strtoupper($ce[0]);
            if($cur == 'BCH'){
               $bc = array('178YYB5BNY4ocm5gqpYrifr6N68zB3jXLV','1858h6Z8UpUZ6Pdkfj79CY1cW3xfQDStf5','169Bc3SjNyJjUjEePehPDRDaKDJTs1iYDD','14L8hQqQ3kaNHSJHJishenjLKDRQhr3e1u','1Q3daoAxFuGFz3jEg2L5ph1WUXQ4BXkCqQ','1yPLUwC6HZga4BP2meXwk8FzNCEuo2W4M','1LrpQA9DtaGWz2zbAuDaNuA1jM57EDHqMb','1D6hE7geEiS9Gc9vtKHr47ygJ4YhErMzY7','18o1bnETtXiN8A98SVMgAAv9BbpDxs2N2u','1G1bD9nRHSpy1jFGMth8WxsnE3mtF1RTvE','19cckiZGCrLQeAen5Vt9ntzb6m7giUkVY','1EAFF8vK7cvg6oVWfoZyJcBwLuw1QMvVdq','15HpPzmguqy6byKfTCsF2rDiFbBHmPLHoW','1Cp1etaT1JZ5gwLySwABPUuj48tXCjMyQs','1JWsVJ4AVBKefCSQ1bMhb2rMJHTiZ8PPMM','1NLE3rJJCrVAHqMBNZFUWzmyznhmSm6HRN','1Ei1SuSmae85jq28xkeibxAmaiRFKMXP96','14vaF7mT9SzqmhWT95jds1kSDxUPWArcE3','1KSCV9qhDTva4yzUsXf1wuUQZRXapdyvuW','1CndotT78CXLtfT2pyGgFaexXH14SjrivS','1EFCzbf9Rc91mA28Vh2vNBck8aosTtHXro','1KDgabBaXMSRFHs2UEcNA929KALaxRGM9U','1s9t8oMY5FQCFee8a5CejFXqbYcSvAb4M');
               $bch = $bc[rand(0, count($bc)-1)];
               $link = $url.'&r='.$bch.'&rc='.$cur;
            }elseif($cur == 'BLK'){
               $bl = array('BTDHEChZaUN9mjavqedFBDfR8tpDEQt5Jp','BMsZPMnsNPnu1fXD9iyh9Hae5qUoKHdAgJ','BKHTwig6yKDCN5NAfprFvufVG5rtbyA9Aj','BDhfvL2HCVhx2N8PvSWENt2izXPoioebPQ','BHJ5YLjMtQ2kd8QSLLmoQpWmbMiRkYFUiS','B6vM5stbJAfWfPsvwgJoPBngNKy2EsM1Ax','BAoNmrXjoR1edxiwmstS6jyHRqoybvBcbR','BM6fyVhNrJPhxAx6eWSstXgk24PzvATVUk','B5o9ecupGGsoRwh2prVsrS4vuXBcH9AKy8','BJPenBM5BofvPiDyJNHzQfuP1wffyfDcxQ','BJWrkrYVxZVF5w2sGQV1UfFD22uBLuntSn','BCSavWVjS5Jb7xGTNAc4nWSJ2qayhnLTWp','BCSavWVjS5Jb7xGTNAc4nWSJ2qayhnLTWp','BG5jUtfBDrbE3ntXTYZveVhqMenRyVUD1A','BAumCzRUBCVSDUsW8R2AsieiBa9N3MTCPA','BPeMCbU7dPEaTwMcJkXBMqZBo3FAkj99mf','BBbZDkQ9ER1M9oEbDupup6TPC7kdYnzj49','BCdKaZugx235B4B26d8VVNjxe1rnH4CaCM','BGBWrwZE843FkWmDEQhqWWiQNTEtr8Ubzj','BPSFJFi33WF4vqF2NjmZQRFpficnQXgwDu','BKa8AM2zk7rn5uqcZLTV3Nc27TGsmgox36','BQn1P7VCrLwuVvYLqSqLargaiZadFgTrqZ','BLwbmXB8s9pM9JzNiF1ebqug4nBZZize6L');
               $blk = $bl[rand(0, count($bl)-1)];
               $link = $url.'&r='.$blk.'&rc='.$cur;
            }elseif($cur == 'BTC'){
               $bt = array('18jdFa1Pn6vVjUDC5SCTPyJU8MF7d48N63','16hGQvkZG8UzJGmr4sFyTrbpBzPZ28hF9E','12jr7cu3eFvLr9FVLSPboiXpV6oYmP3Lgn','15kAnyDJTM5ZvW4mcdNTK4wHxwpBZL3dMD','13swusrrmoSB4RGgAVCACRsrt62yBoPtWW','1D79i6K2QyFABDs1QpsaGxfDeiGuyQEVL9','1EDFETDR4taQwVuFLS3MHWLHzEodTr4hi3','1G4kyTX5xrCJAJFVrQdRde3g2uXgpWoaik','1BruLuMNDApkotWTHnrFtu8Jj6zkPCcfso','1MqeHHJP8VprMQQ5zxEDwgpcorPVNgccnR','12HGo4tDC2Dj6jnaXNvDhDgUNRSCNSXdmj','1PswGS3bXgbHYY6r1kVLzTHsACPLLQvZbr','18muN648wmszw2z4KgLbRELZJ9EJdjdr1v','1mg9doDUeuMERk1B2zUUUg16ca55oSyks','1KpCahu3w3D5wB7RqQymQWabtnJ62NKUyc','1FCAwVpg7jh4dH1CmeBFpdk2z2MFFdM1PL','1EiqKGbWx3zdJ5iiaAeexjs7gK3SM5ig12','1AW1G3R9jrJBE2SyUqE4iCQqubjvAcjpkW','1PRLFsnPcEB16kdwe876NSf5GL3sxJmoNq','1PdoeKfrA3KaFZXxNYhMBwPG9ivVf4qzCb','1FruCvcVwHK9hZoGM4fZvXkB2o9kqbECRN','18NKWwnyTGNDhmRJEqNd6GqcfZngvXE5Sf','1BC6cMnmk1kM6DtQhvLLrNRVcHjauGyz7v');
               $btc = $bt[rand(0, count($bt)-1)];
               $link = $url.'&r='.$btc.'&rc='.$cur;
            }elseif($cur == 'BTX'){
               $bx = array('18CPqHUF45E4cqgpC7A13uEszaRmtDzmiz','1AzsJqTQHyhLo44x2UbTfc1CZakQdzkNxL','1HvUbnhCrrpcbWZB9qGxFj9pdANdnHMWCR','16eS2LdbJ6Ak89v2T23wbqEwV8VAG5jW8o','1NH58NEwWNJTQuXV4gSt6HiezzDqit2rih','1D4Sw7zj2XvxRojQ79rwgQTvzaF1kT61AN','19RN5atSXA7iY3HQGhXLfjPAj3WdMAuoRQ','1MGhuRu85cQF6WcSStBpGqBv12RguMBE4j','18kubpvxVqasd79eHcNzrH34i7BgHoAdCA','1EtG3g72mmUKiuHZJC1Ct7sZgonK9fUGBX','19oVmr72BLxPeA9GkbrY7hfHRyR2RpWscb','1LqqgRwUsafrc8q99ZhA8VHs1Wapm7cWpF','1Gy4n5XfPFxos22dXWhUUN2EvNA7S6Urnt','16xx6gtBHN9HYrci7q9zXijq6irJZtDyKu','16BxYHGs3pXPRjM5H5HjHnok7a8afiuA9S','13x1okX3JZhEra15uK8nF2DfdhzsegYL7S','1CptDXsqg4PVhsKTvhxMmLA9r2qhiZUXX1','1PXvHULU47yxAFPLfZq3ZFyLfW2R9wkbLo','17Q7Rke2PTqiZ6u9ikmKwtjyRpj9poFMVc','13eK4cRQePT7yonHYnJQL7rnx6WUR5CcZp','134WqHTZEkMh2UfZLRg7LnfGQfiK4oXaHt','1HfJea78iGkpRLqXtsvtYE9y3zivq42aBt','1JEHLWsjcJitqzCdcqEKdEocgSyUnFcdbs');
               $btx = $bx[rand(0, count($bx)-1)];
               $link = $url.'&r='.$btx.'&rc='.$cur;
            }elseif($cur == 'DASH'){
               $da = array('XxRUwASZXcuFKkYB1uyECEd52Zhj47RJJr','Xs6SjGbkgVD49cfnnUdsSjw5bXSqnvyi1j','Xq6kpqcNTNiDzLSZESx9Qrhm4YzJ5Grca5','Xbs8DqaogkbAUG95tdjkdoAVPeCrUNYdb9','Xf2rZE9ZjBhQnDEuDRa6utX7e9wpc3n9CJ','XnxYBj6GU1vH1yFTRHVpDWhiZbGNvx8pcn','XqjMZ9wMdCQHnSSEpgiZsWXT4s8mEfvBuf','XbEGWnRc6VuH556RUw3ecpLmB5BLimKTAp','XyznWyxSChM6dadzTotuPZFAZepLDAT28h','XwWi5c12mGoWftnax44BwnADRMksdpJ1WH','Xuht5p3dCLe1N6BqrGVbyg2HMvpugsE59u','XwHsyAsX5bb7gPzH3a82PVgnxtrYse3wRH','Xq2ZjiYk7bH8sXHyoVhM1myaMcWASVa6vD','XhhH1hyP9py268by23FHgVkR4bh6EYcBDA','XexHKDp8hRzCts1WYrrkoiBzjtP8Vwz8hF','Xn3Pa7N5WPqdgf8ufpbFUSiq1iUTJFBLUr','XoZEzWymTZEs5zSrHwiwGePvE6TicqWdVv','XozTDXfgkp9BSLkXteoQeSfDJyQ7u7bkB1','XbuHBQniCCnBGQbRCsYHCu31CRGBidDY4P','Xy7vhYgCEarYhosRUaJ6goP4KKSghciaAg','XxaCmSMqioLHrFc8XtAVRi3k5tVqjxsBys','XeWLb7yjr4jpnW64Zh9jkXg929iM6ZaV4g','XkrGYNo9KriarpX2aDNybfUWn7gygoLERK');
               $dash = $da[rand(0, count($da)-1)];
               $link = $url.'&r='.$dash.'&rc='.$cur;
            }elseif($cur == 'DOGE'){
               $do = array('DFBE6AUvYgsYxACTnEdUfjautg4k5M7yRz','DRLURqu9HxLP9eqbdjNLD3xtuLjCEaTSAU','DBwwrNwhHj5Ko3MH2NcCKxiajxxeiJ8S8C','D9ZsEafvmbMRkNFBk47jGsEdwScWGdyNGE','DPvo3SCwJMJK3HTSkTQVE8e4L1mJHtum3k','DFJaKZFs41bXDjCFczsHfhz2E5nWFNze5b','DK6SG9EbFkSWDJbGi76ZPuGPKcnLbLkdRy','DHWVyPdtcWg4wFU4zHCPJ8gwqogK5YCZ4F','D7SpEVewsujbRJEdZqv6JV4dtduAhrXUkg','DDfWNMgpWwbzft4VkEb36xUPasYUhqGtCr','DKytzs4aAUQ7ZHEo6CTymqP64PHCQFQMag','DMEgoT1j7bTm2XYS3FZffXQdxcuntZYKwN','DDqFenp5RKKAynqcSE2nZ582GoEbdnFCwv','D9VKrbUe8NRDQXJRs2rgBXoVy2QgQPysJG','DSRh8ePZXpGFYKM64vRtjHWghuRUsVWkoQ','DNFBd7BLPXTdVU4YtHevuUASFHfHHY5nMw','DJUyriSU3XNWsdN3d4SuNHCezbcpEy2tBJ','DNQhBEP2RPBMmeSCKTpE4cf5PCRV1etCZC','D8rGR5YQGfrTLbZD96hq9KLeskRHfGHy2E','DT8BpK4Qa9vti6csXD9LUUypTPtjedwEqR','DNd9ohMzvW35F9d8Qh1qAPjKRK3XWShzBN','DRyuaqAoF1Ts3zcyaLS5HYkaMeVSJ2EBmr','DMtyBoTF8dUrwyPn7ZDEh9KgtZGXRvtzmL');
               $doge = $do[rand(0, count($do)-1)];
               $link = $url.'&r='.$doge.'&rc='.$cur;
            }elseif($cur == 'ETH'){
               $et = array('0x2a1c9ebd8ddd04718bf1cb75ccbbb263ce0851b7','0xbc3667d4d5a282a8ea81073f9f1891f9e9a25044','0xb4f7a3eb5f84c1409865079a2ccbfe2ecadfdfa5','0xa8f3074aa462ce4e6f350b4c3cc89ab216dbfa08','0xd530bdaa0f8dd034def9044b10bbb5e4c316a5a0','0xd639f96d1ea69ac5afa38aac7a8a6054c240d61e','0xd1b08f675976bdd0abd191561f53a1b6ce2c6191','0xa700fcbb4c2227e1958c182f1d62d0cf3f358bdd','0x9Fe7f66F1D17f4A7Ca005A970D287088625D7583','0x4E2AD2f4cF31A33ebb7335F1Ea7E818Ab4FDEdF1','0x68F2219616a277FeaC411b033124A535723D9320','0xa312024642AEFa185432fC9bfc3AA9693100222c','0xbBAF66dED56583F2bcA805c90d3eb58580E2AB58','0x084a0650aE4830Ab9D433cA965571e5aa11047ec','0x9c8e3c91f1aec8d516af68ef122b76478bf7ccf8','0xee48a1800d23e11d5d50f9405f350fd91ae2c434','0x9e22b38d962bccf0b184fc3c7a26e57ce4d9f3a2','0x2b06b08ca94cd0a07e606608f5cff1646eb3a739','0x93160eaea99d7925645670289db3a9fc1d37db68','0xc124ac48af34937e9e30b1a0e4795876f7452298','0x54f671236980630f5e929152569a71f249eae2c5','0xc9dc9909e958a03a539e3c9ecdd490ad7fb4a32a','0xaaa2cf9f6bed1611ea4ab6ac25f2dc69b9002553');
               $eth = $et[rand(0, count($et)-1)];
               $link = $url.'&r='.$eth.'&rc='.$cur;
            }elseif($cur == 'LTC'){
               $lt = array('LfrLbMbxZzkVsCUzKEc3EGUsFF9i89feJY','LSJ5xJrxZUicMCKuqs6SUZ5NiGKwZxMWPp','LLxoNqCsivAQ6wweWaNu5jbahKApt4HAmn','LPy84BX8Y1KdBJkvnmMkb614BABTeK9yU8','LN6uB6AgrTgEKDxqLdBTUSwd6JQFJiE1Fm','LXL6yJcrVdVDS2ZAaxrsYyiyrveC8FxeFC','LYSCVfXF9YpUCJbQWa2eZXQ4CTAuaQgYuz','LaHiEfpv3WSMR6wf2Yciuf7SF7txz1xHws','LLTdpjefJirVssfinrGg7D87YUxkEWztcu','LWYw9Vg6HqJkT1uxBzLnXNa7ZzAGH5piSP','Lat7ndbLsuqXV9T1CxWfwZYiBu4XKs5eoL','LPanLw5J1ohTKTRagWb41NhRk8FimT1an5','Li48p92sAYPzw84zjyxRxHdB64fmzYj2Dc','LSPWMwFicqmuL3ZvgWnUUowJMZga9Dtnpq','LVPa9tBJa8u78zMkxA85gmo4hVzkhmMso6','LZ18FHTGyDAu31arXHs5QEYzc82thVrjr6','LSKzp69iC78XduxBo8ST6iJ2VjwyPNaWhV','LPedCWP89ikqf1329bJ3afZR77wzNJxUGf','LdDmogoLtW4mXzeYKoq4dFr2yWNWYkgTSZ','Lh5sBKaWzBL2wXFBcTAsgq9FShpJABj1qT','Lb7fHab548ymWpbwwHN8p6X2cerXE1WX6W','Lgi5XuJWGwRuWoq18gAttgs1noABgCQNBk','LYdn6MkPQE4rTWfhKkSx5vDENsXAQu18xF');
               $ltc = $lt[rand(0, count($lt)-1)];
               $link = $url.'&r='.$ltc.'&rc='.$cur;
            }elseif($cur == 'PPC'){
               $pp = array('PG8hVU3EfCrBhD7JaXPciCrBzZshYqvFdg','PD8u5WZQ1scZb7iGMEow9oD3dYefJrT74P','PV7mjhwiCQLeC7teU9N6223G2jfxtAXUM6','PGhZFiHvbHhZbzxj1jfnJzcjnpQiQoWzgS','PPgao1HjZpf1vLTo3tyX85rkMLX3QuvHWj','PEnpnXvhcRkvs5rcRbafWkSd17XoFTGDka','PCVy8WCMhBtYLMQH5Nio9XMCBjmhXA2Vrk','PJHC5gDtbuqWfDjMjM4RZf4JsW8sB9hb2p','PLZwbJiwdskapPKquLpfNjjadPf4KoQ55E','PGoHnsN9M4a1JBCYAMYLuiURMNziUC4Ur8','PWbtHWs9jvRNmgkVxVNdRgjYjWcXGUVCK2','PSEw8DMuP4JvArSt9K1i5X6ofEuHNKNktQ','PSuSHDAsEiKpmZRmu89BBakKYEqGq4mjhs','PVL2KzVhABD921qdTynJiFURk5Aw9ei9yb','PQYvCD9DFqyNqZN8XguSZ22rt2oJpFacxK','PJ9EbeuPpGsTkigCgRmX4QrFm1CfPNGeTy','PNqsqVZGfyGk3D2zkpvaRJTjbCWQN5oyhw','PVeJNp2tP9HnceGCCBFvEduefgbEb6pDEk','PNsH6A5RBm9J57NCpaW79ay3ovXKX7iUYb','PLE2M2mgTCu7K9y5dP6m87CsyuZbrKsLeb','PGm2Md8Zv9ag3xeEPsLgUchkrRg1G5kt4C','PJFRNEvkZE6btj7kTokmvwwgbPbVQhYJ1h','PH1EGvvmWE5Ct7kXtrWoEcbEFp7caYkHkN');
               $ppc = $pp[rand(0, count($pp)-1)];
               $link = $url.'&r='.$ppc.'&rc='.$cur;
            }elseif($cur == 'XPM'){
               $xp = array('AcKrNcH8dq9iRvVo3KbkxWFrbx8vkS9YQq','ANNJd2SfHt8BprvqUbVNsMisx7JHZ1d6k9','AYtjdNwn2h9WVtPWKB7RvfPgkhuJqVL329','ASDB4ehDBbvPReavBWdCdCyZXzxqFhsknu','AdqkmxXR9cs9LhRFmNBVyPYBmEzVdhNgH4','AbDYGDEBrG11wBRd9dvMYSxtbQGERg71C7','AbkAhUkTvGxUF6LdHGAFFAkjBy5Dvu7Rkx','ANgi1XZD5NZwbryUptL7FoWbnvAMZJj86z','ATESSjhLfkLLLCzYgE64nJhKB9o1jq2Zsr','AVzkdyFJJFFNzqodALzASe9gHst24SLH6o','AdgbGBJ7YbTxYieMSVP8tS9iajaqkH4Q6N','AR2oR3efD2eJh7ZmKpBhc7EjggUp5P5Fzc','AG3yAC39qtiM73MRM4C19EnW94LCHTyttD','AZKKPokDW8EyjuLFw4TMyUtk9fzos3ZaKQ','Ad55xXwNdpoL1wt1rtpb4Lr82LkHmkcTKp','ANvUac8NJ6ApaSDaiorS18UMePHMeN3qce','AbVuscu1JwsrGCwg3sxMWHZuAtXn8ZksVr','Aa4EkdqEQAzgjCMAWJMXoARngWtBPKqTSL','AMfDcYw1nKbGBv9fGcu6aTBLSt4va7atoB','AcNXqpWpEhiDDACado8VWyctRdE67pFW1J','ARJzEuuG99LiY8CiZt3euMYkxvh57XyFXo','AVAcRoH1ZUD49jryxBjpW5fRMa9FNa2Awj','AVDewM1sYtcH82Vu7hyP2XusFdmq58o1LK');
               $xpm = $xp[rand(0, count($xp)-1)];
               $link = $url.'&r='.$xpm.'&rc='.$cur;
            }elseif($cur == 'POT'){
               $po = array('PLaqN6AcozQFsWQc9qc5m86GS3z8gM8G8P','PF2B9xBdxcS9yG2GKBw8qzjZ87A7zR7Et4','PRCx4pScYpwH4vd5LkEWxJgLHuS9Pj9jQZ','PTyBz9pUMX4bGKKy4NcKgKxMoUnCTpqWtF','PWdsaauEUPF85mYfT64iQjjFE2LQXiJ2UD','P9x4E1T1MbsL27x95VRBFunQFXXtfoJSNB','PF6qfcPWrk7i3zzNxiHorURQJgx48MxNzE','PLp44G6qeuYDrwuxgKrc5yTAt1baa6oB2G','PBS7anKobARDJGiXnCaAo21ZvwEQVATfUL','PTyHNae6XPZ93k2Gsk9suSVsBkQjPvJ4Mr','PFp6yUHy53JWKEkGWm9cXaPt2rpiC81eVV','PEdZNKhz9TsbCNXiaXUWXfdGwpVYawEwhE','PR1cS628BefaoWbPR4fRJci53VDTeCQbQF','PPjao45rkvVoq88vsyLSBjygdUT3LeyPUB','PKJzDrCBoJAiHm8R33mqxkxL8XL6EdomLe','PS3rNLLdL4xGnfdYsTWZv2nBUAiCokPy57','PDszizEUnwLBhWVcjJwskt8kpgGWySd2s3','PXg4ifWt3rNQvwXWy7dQThj7c1CUF1unmo','PRirHibbfuSAnTLu5mos9HQRCTydXXYia4','P9LdGkFyo8hhyRRzZf9C6wAHcPpFLhETys','PAyHKtf3Y1qxNardTUm5F3o3j3mWN7jxNU','PEUr3b5q4CBioRUT1448emf9qfD9wSUswL','PV8SScgzK3oCkrhQANN85ZY4QBDQN8Rh4y');
               $pot = $po[rand(0, count($po)-1)];
               $link = $url.'&r='.$pot.'&rc='.$cur;
            }
            $claim = $new->webPage($link);
            $data = $claim['exec'];
            /* INFO SATOSHI */
            $one = explode('<div class="alert alert-success">', $data);
            $two = explode("<a target", $one[1]);
            /* INFO WALLET */
            $inpoh=explode("https://faucethub.io/balance/",$data);
            $wallet_inpoh=explode("\">your account at FaucetHub.io</a>",$inpoh[1]);
            /* INFO TIMEOUT */
            $in = explode("Time until next payout:", $data);
            $time = explode(".", $in[1]);
            $date = date('H:i:s');
            if($two[0] == '' && $wallet_inpoh[0] == ''){
                if($time[0] == ''){
                    $pr = "[{$date}] ~ Claim Failed, your claim url Expired";
                }else{
                   $pr = "[{$date}] ~ Time until next payout: {$time[0]}";
                }
            }else{
               $pr = "[{$date}] ~ {$two[0]} {$wallet_inpoh[0]}";
            }
            print($pr."\n");
         }
      }
      time_sleep_until($sleep); 
   }
}