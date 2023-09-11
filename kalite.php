<?php include_once "header.php" ?>

<head>
    <style>
        @media screen and (max-width:600px) {
            .banner-content-about-us {
                height: 20rem;
            }
        }

        .banner-overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 25rem;
            width: 100%;
            background-color: #00020f;
            opacity: 0.8;
        }

        .banner-text {
            position: absolute;
            z-index: 2;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .banner-text h4 {
            color: white;
        }

        .banner-text h6 {
            color: white;
        }

        .kalite-container {
            display: flex;
            padding: 70px;
        }

        .politika-content {
            margin-left: 2rem;
        }
    </style>
</head>

<body>
    <div class="banner-content-about-us">
        <div class="banner-overlay"></div>
        <div class="banner-text">
            <h4>KALİTE POLİTİKAMIZ</h4>
            <h6>ANA SAYFA / KALİTE POLİTİKAMIZ</h6>
        </div>
    </div>

    <div class="kalite-container">
        <div>
            <div>
                <div>
                    <a href="">İNSAN KAYNAKLARI POLİTİKAMIZ</a>
                </div>
                <div>
                    <a href="">KALİTE POLİTİKAMIZ</a>
                </div>
                <div>
                    <a href="">ÇEVRE POLİTİKAMIZ</a>
                </div>
                <div>
                    <a href="">İSG POLİTİKAMIZ</a>
                </div>
                <div>
                    <a href="">BİLGİ GÜVENLİĞİ POLİTİKAMIZ</a>
                </div>
                <div>
                    <a href="">KVKK VE GİZLİLİK POLİTİKAMIZ</a>
                </div>
            </div>
            <div>
                <h4>İLETİŞİM</h4>
                <div>
                    <span><img style="height:1rem;" src="./assets/images/phone.png" alt=""></span>
                    <a href="phone:+90(312) 229 08 08">+90(312) 229 08 08</a>
                </div>
                <div>
                    <span><img style="height:1rem;" src="./assets/images/mail.png" alt=""></span>
                    <a href="mailto:info@bayburtgrup.com.tr">info@bayburtgrup.com.tr</a>
                </div>
                <div>
                    <a href="./assets/images/BayburtGrup_KalitePolitikası.pdf">PDF İNDİR</a>
                </div>
            </div>
        </div>
        <div class="politika-content">
            <h4>KALİTE POLİTİKAMIZ</h4>
            <p>Firmamız vizyonu doğrultusunda ISO 9001:2015 standardı gereği kalite politikamız;</p>
            <ul>
                <li> Gelişen ve güncel teknolojileri kullanmak ve sektördeki gelişmeleri yakından takip ederek ürün kalitesini sürekli yükseltmek ve müşteri beklentilerini aşan bir üretim gerçekleştirmek,</li>
                <li>En uygun, en doğru ve en ekonomik çözümleri en hızlı biçimde üreterek daha sonra ortaya çıkabilecek uygunsuzlukların önüne geçmek,</li>
                <li>Müşterinin ihtiyaç ve beklentilerini en üst seviyede karşılayan bir anlayış içinde güvenilir bir firma olmak,</li>
                <li>Politikamız doğrultusunda kalite hedeflerimize ulaşmak için kalite anlayışımızın sürekliliğini sağlayarak içinde bulunduğumuz topluma ve çevreye saygılı, örnek bir kuruluş olmak,</li>
                <li>Politikamız doğrultusunda çalışanlarımız ile hedeflerimize ulaşmak için gerekli tüm eğitimleri vermek, uygun çalışma ortamını sağlamak ve bunu teknoloji ile destekleyerek bir aile olmak,</li>
                <li>Deneyim ve birikimimizi daha da artırarak ülke ekonomisine verdiğimiz hizmet kalitesi ile katkıda bulunmak,</li>
                <li>Müşteri memnuniyetini, çalışan memnuniyeti ve hizmet kalitemiz ile sağlamak,</li>
                <li>Süreç ve yönetimde sistem yaklaşımı ile, maksimum iletişim ve verimliliği sağlamak,</li>
                <li>Verimlilik esasına dayalı olarak, sürekli iyileştirmeyi sürdürülebilir hale getirmek,</li>
                <li> Uygulanabilir şartları yerine getirmek ve çalışan ile tedarikçileri katarak etkin karar verme mekanizmasını sağlamak,</li>
                <li>Stratejilere bağlı kurumsal yönetim ile, tüm çalışanlarımıza liderliği aşılamak,</li>
            </ul>
            <p>için yönetim olarak kalite yönetim sisteminin sürekliliği sağlamayı taahhüt ederiz.</p>
        </div>
    </div>



    <?php include_once "footer.php" ?>
</body>

</html>