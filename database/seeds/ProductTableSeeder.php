<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $products = [
            ['name_en' => 'nars', 'name_ch' => '纳尔斯', 'name_th' => 'น่า เอ้อ ซือ', 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'estee lauder', 'name_ch' => '雅诗兰黛', 'name_th' => 'หยา ซือ หลาน ไต้', 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'suqqu', 'name_ch' => '苏酷', 'name_th' => 'ซู คู่', 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'skii', 'name_ch' => 'SKII', 'name_th' => 'เอส เค เอ้อ', 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'sulwhasoo', 'name_ch' => '雪花秀', 'name_th' => 'สูเว๋ ฮวา ซิ่ว', 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'shiseido', 'name_ch' => '资生堂', 'name_th' => 'จือ เชิง ทาง', 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'chanel', 'name_ch' => '香奈儿', 'name_th' => 'เซียง น่าย เอ๋อ', 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'lancome', 'name_ch' => '兰蔻', 'name_th' => 'หลาน โคว่', 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'cover_mark', 'name_ch' => '傲丽', 'name_th' => 'อ้าว ลี่', 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'loreal', 'name_ch' => '欧莱雅', 'name_th' => 'เอ่า ไล้ หยา', 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'revlon', 'name_ch' => '露华浓', 'name_th' => 'ลู่ ฮวา หนง', 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'mistine', 'name_ch' => '美氏婷', 'name_th' => 'เหม่ย ซื่อ ถิง', 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'snail white', 'name_ch' => '蜗牛面霜', 'name_th' => 'วัว นิ๋ว เมี่ยน ซวน', 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'mac', 'name_ch' => '魅可', 'name_th' => 'เม่ย เค่อ', 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'dior', 'name_ch' => '迪奥', 'name_th' => 'ตี่ เอ้า', 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'ysl', 'name_ch' => '伊夫圣罗兰', 'name_th' => 'อี้ ฟู่ เชิง หลัว หลาน', 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'kanebo', 'name_ch' => '佳丽宝', 'name_th' => 'เจีย ลี่ เป่า', 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'pandora', 'name_ch' => '番朵拉', 'name_th' => 'พัน ตั๋ว ลา', 'category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'jubilee', 'name_ch' => '珠比俐', 'name_th' => 'จู ปี่ ลี่', 'category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'casio', 'name_ch' => '卡西欧', 'name_th' => 'คา ซี โอ', 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'swatch', 'name_ch' => '色板', 'name_th' => 'เซ่อ ปาน', 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'guess', 'name_ch' => '盖尔斯', 'name_th' => 'ก้าย เอ้อ ซือ', 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'garmin', 'name_ch' => '佳明', 'name_th' => 'เจีย มิ่ง', 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'luminox', 'name_ch' => '鲁美诺斯', 'name_th' => 'ลู่ เม่ย นั่ว สือ', 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'seiko', 'name_ch' => '精工', 'name_th' => 'จิง กง', 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'fossil', 'name_ch' => '化石', 'name_th' => 'หั่ว สื้อ', 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'citizen', 'name_ch' => '西铁城', 'name_th' => 'สือ เทีย เฉิง', 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'titoni', 'name_ch' => '梅花', 'name_th' => 'เม่ย ฮัว', 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'd1 miland', 'name_ch' => 'D1 MILAND', 'name_th' => 'ดิ วัน มิ เลน', 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'tissot', 'name_ch' => '天梭', 'name_th' => 'เทียน ซัว', 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'rado', 'name_ch' => '雷达', 'name_th' => 'เล่ย ต๋า', 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'furla', 'name_ch' => '芙拉', 'name_th' => 'ฟู๋ ลา', 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'mido', 'name_ch' => '美度', 'name_th' => 'เม่ย ตู๋', 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'hamilton', 'name_ch' => '汉米尔顿', 'name_th' => 'ฮั่น มี่ เอ้อ ตุ้น', 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'longines', 'name_ch' => '浪琴', 'name_th' => 'ลั่ง ฉิ่น', 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'sunglass hut', 'name_ch' => 'SUNGLASS HUT', 'name_th' => 'ซัน กลาส ฮัท', 'category_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'marco_polo', 'name_ch' => '马可波罗', 'name_th' => 'ม๋า เค่อ ปัว หลัว', 'category_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'marco_spade', 'name_ch' => 'MARCO SPADE', 'name_th' => 'ม๋า เค่อ สเปช', 'category_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'mira_madison', 'name_ch' => 'MIRA MADISON', 'name_th' => 'มิรา มา ดิ ซัน', 'category_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'percy_grey', 'name_ch' => 'PERCY GREY', 'name_th' => 'เพ้อ ซี เก', 'category_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'wacoal', 'name_ch' => '华歌尔', 'name_th' => 'หัว เกอ เอ๋อ', 'category_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'sabina', 'name_ch' => '莎宾娜', 'name_th' => 'ชา ปิน น่า', 'category_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'triumph', 'name_ch' => '黛安芬', 'name_th' => 'ไต้ อัน เฟิน', 'category_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'mark', 'name_ch' => '马莎', 'name_th' => 'หม่า ซา', 'category_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'undergear', 'name_ch' => 'UNDERGEAR', 'name_th' => 'อัน เด้อ  เกีย', 'category_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'saisamon', 'name_ch' => '赛莎梦', 'name_th' => 'ส่าย สะ เมิน', 'category_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'speedo', 'name_ch' => '速比涛', 'name_th' => 'ซู่ ปี๋ เทา', 'category_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'hush_puppies', 'name_ch' => '暇步士', 'name_th' => 'เซีย ปู้ ซื่อ', 'category_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'jockey', 'name_ch' => '骑师', 'name_th' => 'ชี๋ สือ', 'category_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'gucci', 'name_ch' => '"古驰	"', 'name_th' => 'กู่ ฉือ', 'category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'lancome', 'name_ch' => '兰蔻', 'name_th' => 'หลาน โคว่', 'category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'clarins', 'name_ch' => '娇韵诗', 'name_th' => 'เจียว ยุ่น ชือ', 'category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'clinique', 'name_ch' => '倩碧', 'name_th' => 'เชี่ยน ปี้', 'category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'giorgio_armani', 'name_ch' => '阿玛尼', 'name_th' => 'อา มา นี๋', 'category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'paco_rabanne', 'name_ch' => '帕高', 'name_th' => 'พ่า เกา', 'category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'dunhill', 'name_ch' => '登喜路', 'name_th' => 'เติ๋ง ซี ลู่', 'category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'roxy', 'name_ch' => '罗克西', 'name_th' => 'หลั๋ว เค่อ ซี', 'category_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'calvin klein', 'name_ch' => '卡尔文克莱恩', 'name_th' => 'ค๋า เอ้อ เวิ่น เค่อ ล้าย เอิน', 'category_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'esp', 'name_ch' => 'ESP', 'name_th' => 'อี เอส พี', 'category_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'marks', 'name_ch' => '马莎', 'name_th' => '"หม่า ซา	"', 'category_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'ripcurl', 'name_ch' => '里普柯尔', 'name_th' => 'ลี๋ พู เคอ เอ้อ', 'category_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'nike', 'name_ch' => '耐克', 'name_th' => 'น่าย เค่อ', 'category_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'mlb', 'name_ch' => '棒球大联盟', 'name_th' => 'ป่าน ชิ้ว ต้า เลี่ยน เมิ่ง', 'category_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'adidas', 'name_ch' => '阿迪达斯', 'name_th' => 'อา ดี๋ ด่า ซือ', 'category_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'levi_s', 'name_ch' => '李维斯', 'name_th' => 'หลี่ เหวย ซือ', 'category_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'lee', 'name_ch' => '李', 'name_th' => 'หลี่่', 'category_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'polo', 'name_ch' => '保罗', 'name_th' => 'เปา หลั๋ว', 'category_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'defry_o1', 'name_ch' => 'DEFRY O1', 'name_th' => 'ดิ ไฟ โอ วัน', 'category_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'evisu', 'name_ch' => '惠美寿', 'name_th' => 'หุ้ย เม่ย โซว', 'category_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'lacost', 'name_ch' => '鳄鱼牌', 'name_th' => 'เอ้อ ยู่ ผาย', 'category_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'converse', 'name_ch' => '匡威', 'name_th' => 'ควน เวย', 'category_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'reebok', 'name_ch' => '锐 步', 'name_th' => 'ลุ่ย ปู้', 'category_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'g_star_raw', 'name_ch' => 'G-STAR RAW', 'name_th' => 'จี สตา เรอ', 'category_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'kamimura', 'name_ch' => '鳥山明', 'name_th' => 'เนี๋ยว ซาน มิ่ง', 'category_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'hybrid', 'name_ch' => 'HYBRID', 'name_th' => 'ไฮ บริค', 'category_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'giorano', 'name_ch' => '佐丹奴', 'name_th' => 'จั๋ว ตัน นู๋', 'category_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'john_henry', 'name_ch' => '约翰亨利', 'name_th' => 'เยว ฮั่น เหิน ลี่', 'category_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'champion', 'name_ch' => '冠军', 'name_th' => 'กว้า จูน', 'category_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'dyson', 'name_ch' => '戴森', 'name_th' => 'ไต่ สัน', 'category_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'thule', 'name_ch' => '图勒', 'name_th' => 'ทู๋ เลย', 'category_id' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'delsey', 'name_ch' => '法国大使', 'name_th' => 'ฟ่า กัว ต้า สื๋อ', 'category_id' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'elements', 'name_ch' => 'ELEMENTS', 'name_th' => 'อี เลอ เม้น', 'category_id' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'caggioni', 'name_ch' => '卡吉奥尼', 'name_th' => 'ค๋า จี่ เอ้า นี๋', 'category_id' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'polo_travel_club', 'name_ch' => 'POLO TRAVEL CLUB', 'name_th' => 'เปา หลัว ทรา เวอ คลับ', 'category_id' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'guess', 'name_ch' => 'GUESS', 'name_th' => 'เกส', 'category_id' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'mos', 'name_ch' => 'MOS', 'name_th' => 'โมส', 'category_id' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'morgan', 'name_ch' => 'MORGAN', 'name_th' => 'มอ เกน', 'category_id' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['name_en' => 'samsonite', 'name_ch' => 'SAMSONITE', 'name_th' => 'เซม โซ ไน', 'category_id' => 9, 'created_at' => now(), 'updated_at' => now()]
        ];

        Product::query()->insert($products);
    }
}
