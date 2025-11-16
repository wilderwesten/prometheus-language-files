<?php

$lang = array(

    // Navigation bar
    "home" => "Ana Sayfa",
    "store" => "Mağaza",
    "buy_credits" => "Kredi Satın Al",
    "raffles" => "Çekilişler",
    "profile" => "Profil",
    "support" => "Destek",
    "admin" => "Yönetim",
    "sign_out" => "Çıkış yap",
    "sign_in" => "Giriş yap",

    // Header errors and messages
    "not_setup" => "Panelinizi düzgün şekilde kurmadınız! <a href='admin.php?a=gen&p=settings'>Buraya tıklayın</a> [Admin -> Genel Ayarlar -> Ayarlar]",
    "header_sandbox" => "PayPal Sandbox etkin. Sadece test amaçlı kullanın! <a href='admin.php?a=gen&p=paypal'>Buradan</a> devre dışı bırakabilirsiniz",
    "missing_action" => "Bir veya daha fazla pakette eksik eylem var!",
    "unfinished_action" => "'Profil' sayfasında tamamlanmamış bir işleminiz var, <a href='profile.php'>buraya tıklayın</a>",

    // Frontpage
    "welcome" => "Hoş geldiniz - Giriş yapın",
    "welcome_text" => "Kolay bağış panelimizi kullanmak için Steam ile giriş yapın.",

    // News
    "news" => "Haberler",
    "by" => "Yayınlayan",
    "no_news" => "Haber yok",
    "no_news_text" => "Şu anda herhangi bir haber bulunmuyor.",
    "no_news_articles" => "Hiç haber makalesi yok.",

    // Footer
    "tos" => "Hizmet Şartları",
    "powered_by" => "Steam tarafından desteklenmektedir",

    // Store
    "credits" => "Krediler",
    "featured_pkg" => "Öne Çıkan Paket",
    "permanent" => "Kalıcı",
    "non_permanent" => "Geçici",

    "select_credit" => "Kredi Paketini Seç",
    "global_packages" => "Genel Paketler",

    // Raffles
    "raffle_ticket" => "Bilet satın al",
    "raffle_ended" => "Çekiliş sona erdi, kazanan:",
    "raffle_not_compatible" => "Bu paket, sahip olduğunuz bir paketle uyumlu değil. Çekilişe giriş reddedildi.",
    "raffle_already_own" => "Bu pakete zaten sahipsiniz. Çekilişe giriş reddedildi.",
    "raffle_reached_max" => "Maksimum çekiliş giriş hakkına ulaştınız. Çekilişe giriş reddedildi.",

    // Support
    "create_ticket" => "Destek talebi oluştur",
    "ticket_closed" => "Bu destek talebi kapatıldı.",
    "reply" => "Yanıtla",
    "create" => "Oluştur",

    // Terms of Service
    "tos_edited" => "Hizmet Şartları düzenlenmiş. <a href='tos.php'>Hizmet Şartları</a> paket satın almadan önce onaylayın!",
    "tos_must_accept" => "Satın almadan önce Hizmet Şartlarını kabul etmelisiniz!",
    "tos_accept" => "Kabul et",

    // Purchase buttons
    "purchase_paypal" => "PayPal ile Satın Al",
    "purchase_credits" => "Krediler ile Satın Al",
    "purchase" => "Satın Al",
    "buy_sign_in" => "Satın almadan önce giriş yapmalısınız!",
    "buy_already_own" => "Bu pakete zaten sahipsiniz!",
    "buy_not_compatible" => "Bu paket, sahip olduğunuz bir paketle uyumlu değil!",
    "buy_they_already_own" => "Bu kişi zaten bu pakete sahip!",
    "buy_they_not_compatible" => "Bu paket, sahip oldukları bir paketle uyumlu değil!",

    // Packages
    "buying_someone_else" => "Başka biri için mi satın alıyorsunuz?",
    "buying_yourself" => "Şu anda kendiniz için satın alıyorsunuz",
    "buying_for" => "Şu anda şunun için satın alıyorsunuz:",
    "packages_custom_amount" => "Özel miktar",

    "packages_not_available" => "Bu sunucu için kullanılabilir paket yok.",
    "raffle_not_available" => "Şu anda çekiliş paketleri mevcut değil.",
    "credit_not_available" => "Kredi paketi mevcut değil.",

    // Buttons
    "submit" => "Gönder",

    // Profile
    "non_perm_pkg" => "Geçici Paket",
    "perm_pkg" => "Kalıcı Paket(ler)",
    "acc_info" => "Hesap Bilgileri",
    "pkg_history" => "Paket Geçmişi",
    "acc_credits" => "Krediler",
    "transfer_credits" => "Kredi Transferi",
    "package" => "Paket",

    // Tables
    "id" => "ID",
    "user" => "Kullanıcı",
    "description" => "Açıklama",
    "timestamp" => "Zaman Damgası",
    "action" => "İşlem",
    "replies" => "Yanıtlar",
    "view" => "Görüntüle",

    // Select boxes
    "select_server" => "Sunucu seç:",
    "select_currency" => "Para birimi seç:",
    "select_category" => "Kategori seç:",
    "none" => "Hiçbiri",

    // Modals
    "yes" => "Evet",
    "no" => "Hayır",
    "sure" => "Emin misiniz?",
    "sure_cur" => "Bu para birimini silmek istediğinize emin misiniz?",
    "sure_srv" => "Bu sunucuyu silmek istediğinize emin misiniz?",
    "sure_cat" => "Bu kategoriyi silmek istediğinize emin misiniz?",

    // Dangerous settings
    "dangerous" => "Tehlikeli ayarlar",
    "danger_cur" => "Alternatif olarak bu para birimini silebilirsiniz.",
    "danger_srv" => "Bu sunucuyu, ona atanmış hiçbir paket yoksa silin!",
    "danger_cat" => "Bu kategoriyi, ona atanmış hiçbir paket yoksa silin!",
    "delete" => "Sil",

    // Admin nav
    "dashboard" => "Panel",
    "general_settings" => "Genel Ayarlar",
    "support_tickets" => "Destek Talepleri",
    "servers" => "Sunucular",
    "currencies" => "Para Birimleri",
    "categories" => "Kategoriler",
    "packages_and_actions" => "Paketler & Eylemler",
    "credit_packages" => "Kredi Paketleri",
    "theme_editor" => "Tema Düzenleyici",
    "documentation" => "Dokümantasyon",

    // General Settings
    "settings" => "Ayarlar",
    "main_page" => "Ana Sayfa",
    "integration_settings" => "Entegrasyon Ayarları",
    "ingame_notifications" => "Oyun İçi Bildirimler",

    // Servers page
    "add_srv" => "Sunucu ekle",
    "edit_srv" => "Sunucu düzenle",
    "server_name" => "Sunucu Adı",
    "featured_pkg_short" => "Öne çıkan pkg",

    // Currency page
    "add_cur" => "Para birimi ekle",
    "edit_cur" => "Para birimi düzenle",
    "cc" => "Para Birimi Kodu",

    // Category page
    "add_cat" => "Kategori ekle",
    "edit_cat" => "Kategori düzenle",
    "cat_name" => "Kategori Adı",

    // Dashboard nav
    "main_dashboard" => "Ana Panel",
    "sale" => "İndirim",
    "transactions" => "İşlemler",
    "users" => "Kullanıcılar",
    "logs" => "Kayıtlar",
    "update_sql" => "SQL Güncelle",
    "other_features" => "Diğer Özellikler",

    // Admin dashboard
    "total" => "Toplam",
    "full_total" => "Genel Toplam",
    "dashboard_text" => "Yönetici paneline hoş geldiniz. Burada sunucularınızdaki bağış aktivitelerine dair istatistikleri görüntüleyebilirsiniz.",

    // New in 1.4.7.2
    "welcome_main" => "Hoş geldiniz",
    "need_credits" => "Daha fazla krediye mi ihtiyacınız var? <a href='store.php?page=credits'>Buraya tıklayın!</a>",
    "no_history" => "Geçmiş yok",
    "amount" => "Miktar",
    "you_have_none" => "Hiç yok!",

    "add_cre" => "Kredi paketi ekle",
    "edit_cre" => "Kredi paketi düzenle",
    "pack_title" => "Paket başlığı",
    "price" => "Fiyat",
    "currency" => "Para birimi",
    "sure_cre" => "Bu kredi paketini silmek istediğinize emin misiniz?",
    "danger_cre" => "Alternatif olarak bu kredi paketini silebilirsiniz.",
    "select_package" => "Paket seç:",
    "choose_cre" => "Kredi paketi seç",
    "brief_desc" => "Kısa açıklama",
    "amt_of_cre" => "Kredi miktarı",
    "price_of_pkg" => "Paket fiyatı",
    "no_support" => "Hiç destek talebiniz yok",
    "no_other_available" => "Başka paket yok",

    // New in 1.4.8
    "purchase_free" => "Bu paketi ücretsiz alın!",
    "dashboard_revenuegraph" => "Gelir Grafiği",
    "dashboard_revenuecurrency" => "Ana para biriminizde gösterilir",
    "dashboard_packagesgraph" => "Paket Satışları",
    "dashboard_serversgraph" => "Sunucu Satışları",
    "between" => "Arasında",
    "and" => "ve",

    // New in 1.4.9
    "free" => "Ücretsiz",
    "buy_own_free" => "Bu ücretsiz pakete zaten sahipsiniz. İkinci kez alamazsınız!",

    // New in 1.4.9.2
    "updates" => "Güncellemeler",

    // New in 1.4.9.3
    "header_sqlupdate" => "Uygulanmamış MySQL güncellemeniz var <a href='admin.php?update'>burada!</a>",
    "monthly_goal" => "Aylık hedef",

    // New in 1.4.9.6
    "payment_success" => "Ödeme başarılı!",
    "profile_updated" => "Profiliniz güncellendi.",
    "payment_failed" => "Ödeme başarısız!",
    "check_credits" => "Bu paketi satın almak için yeterli krediniz olduğundan emin olun!",
    "not_authorised" => "Bu alanı görüntülemek için yetkiniz yok. Önce giriş yapın!",

    // New in 1.5
    "wiki" => "Wiki",
    "no_graph_info" => "Grafik bilgisi yok",
    "no_graph_info_text" => "Herhangi bir işlem olmadığı için grafik bilgisi gösterilmiyor!",
    "paymentwall_purchase" => "Paymentwall ile Satın Al",
    "stripe_purchase" => "Stripe ile Satın Al",
    "payment_gateways" => "Ödeme Yöntemleri",
    "advanced" => "Gelişmiş",
    "no_servers" => "Şu anda sunucu mevcut değil.",
    "entries" => "giriş",
    "you_can_enter" => "Girebileceğiniz",
    "times_more" => "kez daha",
    "dashboard_creditsrevenue" => "Bu grafik ayrıca harcanan krediler ile harcanan para karşılaştırmasını gösterir. (Krediler = <font color='#9c9c9c'><b>Gri</b></font>, Para = <font color='#c10000'><b>Kırmızı</b></font>)",
    "pkg_discounted" => "Bu paket, sahip olduğunuz şu paket nedeniyle indirimlidir:",

    "compatible_text" => "Bu pakete sahipseniz, aşağıdaki paketleri alamazsınız",
    "not_compatible" => "Uyumsuz",

    "packages" => "Paketler",
    "upgradeable_text" => "Seçilen pakete sahipseniz, bu paketi seçilen paketin fiyatı üzerinden indirimli alırsınız",
    "upgradeable" => "Yükseltilebilir",

    "assign_actions" => "Eylem ata",
    "actions_text" => "Bu paketin satın alınmasından sonra yapılacak eylemleri belirleyin.",
    "actions" => "Eylemler",
    "label_amount" => "Etiket miktarı",
    "add_package" => "Paket ekle",
    "edit_package" => "Paket düzenle",
    "labels" => "Etiketler",
    "title" => "Başlık",
    "category" => "Kategori",
    "no_packages" => "Sistemde hiçbir paket bulunmuyor",

    // New in 1.5.0.6
    "signin" => "Giriş yap",
    "welcome_signin" => "Paket satın almak için önce giriş yapmalısınız",
    "blacklist_notext" => "Kara listeye almak için geçerli bir Steam64 veya SteamID girin!",
    "blacklist_success" => "Bu kişiyi başarıyla kara listeye aldınız",
    "blacklisted_you" => "Bu toplulukta herhangi bir paket satın almanız yasaklanmıştır",
    "blacklisted_them" => "Bu kişi kara listededir, onun için satın alamazsınız",

    "recent_donators" => "Son bağışçılar",
    "name" => "İsim",
    "recent_none" => "Herhangi bir son bağışçı yok",
    "raffle_free" => "Ücretsiz katıl!",

    // New in 1.5.0.8
    "top_donators" => "En çok bağış yapanlar",
    "top_none" => "En çok bağış yapan bulunmuyor",

    // New in 1.5.0.9
    "step" => "Adım",

    // New in 1.5.1
    "permission_groups" => "İzin grupları",
    "add_permission" => "İzin grubu ekle",
    "edit_permission" => "İzin grubu düzenle",
    "permissions" => "İzinler",
    "no_perm" => "Üzgünüm Dave, bunu yapmana izin veremem (Yetersiz izin)",

    // New in 1.5.1.2
    "select_gateway" => "Ödeme yöntemi seç",

    // New in 1.5.2
    "buy_disable" => "Paketleri devre dışı bırak",
    "buy_disable_text" => "Bu paketi satın alırsanız devre dışı bırakılacak paketler",
    "credits_doesntexist" => "Bu kullanıcı sistemde mevcut değil.",
    "credits_yourself" => "Kendinize kredi aktaramazsınız.",
    "credits_steamid" => "Başka bir SteamID deneyin",
    "credits_transferringto" => "Aktarım yapılıyor:",

    "type" => "Tür",
    "gateway" => "Ödeme yöntemi",
    "no_users" => "Kullanıcı bulunamadı",

    "view_profile" => "Profili görüntüle",
    "view_blacklist" => "Kara listeyi görüntüle",

    "manage" => "Yönet",
    "users_search" => "İsim, steam64 veya steamid ile arayın",

    "transaction" => "İşlem",
    "delivered" => "Teslim edildi",
    "state" => "Durum",
    "assign_package" => "Paket ata",
    "set_credits" => "Kredileri ayarla",
    "give_ticket" => "Bilet ver",
    "del_inactive_actions" => "Pasif eylemleri sil",

    "select_pkg" => "Paket seç",
    "do_assign_actions" => "Eylemleri ata",
    "dont_assign_actions" => "Eylemleri atama",
    "clone_expiretime" => "Aynı türdeki son paketin bitiş süresini klonla",
    "assign" => "Ata",

    "set" => "Ayarla",
    "disable" => "Devre dışı bırak",
    "enable" => "Etkinleştir",
    "inactive_everyone" => "Herkes için pasif yap",
    "del" => "Sil",
    "edit" => "Düzenle",

    "sale_settings" => "İndirim ayarları",
    "sale_text" => "İndirimin uygulanacağı paketleri seçin.",
    "message" => "Mesaj",
    "percentage" => "Yüzde",
    "end_date" => "Bitiş tarihi",

    "update" => "Güncelle",
    "automatic_updates" => "Otomatik güncellemeler",
    "dl_lua" => "Son lua sürümünü indir",
    "dl_web" => "Son web sürümünü indir",
    "no_write_perm" => "Updates klasörünün yazma izni yok! Otomatik güncellemeler çalışmayacak. <br> Ancak güncellemeyi manuel indir tuşunu kullanabilirsiniz",
    "newest_version" => "Kullanılabilir en yeni sürüm:",

    "test_message" => "Sunucuya test mesajı gönder",

    // New in 1.5.2.2
    "find_more" => "Daha fazla bilgi edin!",

    // New in 1.5.3
    "duplicate" => "Kopyala",
    "other" => "Diğer",
    "someone_else" => "Yine de başkası için satın alabilirsiniz",

    // New in 1.5.4
    "here" => "burada",
    "job_already_created" => "Zaten özel bir iş oluşturmuşsunuz. Doğrudan ödeme işlemine geçmek istiyorsanız $1 tıklayın. Aksi halde yenisini oluşturabilirsiniz",

    "general_info" => "Genel bilgiler",
    "preferences" => "Tercihler",

    "job_name" => "İş adı",
    "chat_cmd" => "Bu işe geçmek için sohbet komutu",
    "job_desc" => "İş açıklaması",
    "job_colour" => "İş rengi",

    "weapons" => "Silahlar",
    "models" => "Modeller",
    "model" => "Model",

    "job_costs" => "Maliyeti $1 veya $2 kredi",

    "friends" => "Arkadaşlar",
    "friends_max" => "<h6>Arkadaşlar - Maksimum $1</h6>",
    "friends_add" => "Her eklenen arkadaş fiyata $1 veya $2 kredi ekler",
    "friends_not" => "Bu pakete arkadaş eklemenize izin verilmemektedir",

    "salary" => "Maaş",
    "salary_static" => "Maaşınız $1 olacak",
    "salary_base" => "Temel maaş $1. Her artırmada fiyata $2 veya $3 kredi eklenir",
    "salary_max" => "<h6>Maaş - Maksimum $1 kez artırılabilir</h6>",
    "salary_current" => "Mevcut maaşınız: $1",

    "license" => "Lisans",
    "license_included" => "Bu iş için lisans dahildir",
    "license_include" => "Lisans ekle - Maliyeti $1 veya $2 kredi",
    "license_no" => "Lisans yok",

    "payment_confirmation" => "Ödeme onayı",
    "job_total" => "Mevcut toplam: $1 veya $2 kredi",
    "job_proceed" => "Ödemeye devam et",

    // New in 1.5.5
    "job_total_nocredits" => "Mevcut toplam: $1",
    "job_total_onlycredits" => "Mevcut toplam: $1 kredi",

    "earned_total" => "TOPLAM KAZANÇ",
    "earned_week" => "BU HAFTA KAZANILAN",
    "earned_month" => "BU AY KAZANILAN",

    "real_transaction" => "Gerçek bir işlem olarak say",
    "not_real_transaction" => "Gerçek işlem olarak sayma (İstatistiklere eklenmez)",

    // New in 1.6
    "active_everyone" => "Herkes için aktif yap",
    "buy_others_disabled" => "Bu sistemde başkası için satın alma devre dışı",
    "job_skip_prize" => "Atla - Bu çekiliş ödülünü istemiyorsanız tıklayın",

    "move_packages" => "Paketleri taşımak için $1 tıklayın",

    "add" => "Ekle",

    // Theme
    "theme" => "Tema",
    "danger_theme" => "Bu temayı, kullanılmıyorsa silin!",
    "sure_theme" => "Bu temayı silmek istediğinize emin misiniz?",
    "theme_name" => "Tema adı",

    "edit_theme" => "Tema düzenle",
    "add_theme" => "Tema ekle",
    "select_theme" => "Tema seç",

    // Imprint page
    "imprint" => "Künye",
    "enable_imprint" => "Künye sayfasını etkinleştir",
    "company_name" => "Şirket adı",
    "street_address" => "Sokak adresi",
    "post_address" => "Posta adresi",
    "country" => "Ülke",
    "trade_register" => "Ticaret sicili",
    "company_id" => "Şirket ID",
    "company_ceo" => "CEO",
    "contact_email" => "İletişim e-postası",
    "contact_phone" => "İletişim telefonu",

    // New in 1.6.1
    "game" => "Oyun",
    "server_ip" => "Sunucu IP",
    "server_port" => "Sunucu portu",
    "server_rcon" => "Sunucu RCon",

    "edit_raffle" => "Çekilişi düzenle",
    "add_raffle" => "Çekiliş ekle",
    "select_raffle" => "Çekiliş seç:",

    "package_cantbuy" => "Aşağıdakilerden birine sahip olmadan bu paketi satın alamazsınız: $1",
    "package_they_cantbuy" => "Bu kişi aşağıdakilerden birine sahip olmadan bu paketi satın alamaz: $1",

    "hide" => "Bu paketlerden hiçbirine sahip değilseniz, bunu alamazsınız.",
    "hide_text" => "Aşağıda seçilen paketlerden birine sahip değilseniz, bu paketi satın alamazsınız.",

    "your_spendings" => "Son 5 aydaki harcamalarınız",
    "spendings_currency" => "Bu harcamalar, bu web sitesinin ana para birimi [$1] cinsinden gösterilmektedir. Bu grafik, harcanan kredileri harcanan parayla karşılaştırmaktadır. Krediler parayla satın alınsa da. (Krediler = <font color=‘#9c9c9c’><b>Gri</b></font>, Para = <font color=‘#c10000’><b>Kırmızı</b></font>)",

    "spent_total" => "TOPLAM HARCAMA",
    "spent_week" => "HAFTALIK HARCAMA",
    "spent_month" => "AYLIK HARCAMA",

    /**
     * New in 1.6.1.5
     */
    "advent_calendar" => "Noel takvimi",
    "advent" => "Noel",
    "day" => "Gün",
    "advent_opened" => "1 dolarlık günü açtınız ve 2 dolar kazandınız!",
    "advent_nopkg" => "Bu gün için atanmış bir paket yoktur, lütfen bu konuda topluluğunuzun yöneticisiyle iletişime geçin.",
    "advent_text" => "1 Aralık'tan Noel arifesi olan 24 Aralık'a kadar her gün bir paket hediye alın!",

    /**
     * New in 1.6.2
     */
    "coupons" => "Kuponlar",
    "add_cou" => "Kupon ara",
    "edit_cou" => "Kupon düzenle",
    "select_cou" => "Kupon seç",
    "sure_cou" => "Bu kuponu silmek istediğinden emin misin?",
    "coupon_text" => "Eğer bir kupon kodun varsa buraya ekleyebilirsin :)",

    /**
     * New in 1.6.3.23
     */
    "privacy" => "Gizlilik Sözleşmesi",
    "enable_privacy" => "Gizlilik Sözleşmesini Etkinleştir",

    /**
     * New in 1.6.3.25
     */
    "link_expire" => "Link expiration time",
    "link_expire_text" => "If you own any of the selected packages, and they have not expired, this package adds their expire time to this one and deactivates the other ones",

    /**
     * New in 1.6.4
     */
    "advent_opened_both" => "You have opened day $1 and received $2 and $3 credits!",
    "advent_opened_credits" => "You have opened day $1 and received $2 credits!",
    "advent_opened_nothing" => "You have opened day $1 unfortunately received nothing :(",

    /**
     * New in 1.7.6
     */
    "hightolow" => "Fiyat (Yüksekten Düşüğe)",
    "lowtohigh" => "Fiyat (Düşükten Yükseğe)",
    "categories_store" => "Kategoriler",
    "sort_by" => "Şuna göre sırala",
    "search_by" => "Ara",
    "category_all" => "Hepsi",
    "id_search" => "ID (Varsayılan)",
    "search_one" => "Ara (Başlık, Açıklama, Etiketler)",
    "no_description" => "Açıklama yok.",
);
