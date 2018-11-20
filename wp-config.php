<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define('DB_NAME', 'blog');

/** Username của database */
define('DB_USER', 'root');

/** Mật khẩu của database */
define('DB_PASSWORD', 'root');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'YyR%?%ICZn3Oab?Yqy/; :7uj#6:/$mqt`Z^.?r;>7=kvdbXJhaEx ,Sg4;~%$xQ');
define('SECURE_AUTH_KEY',  'xs)2,zg{2BlW@2tc=]u%1 6.{DOYX9)KAXlUHrxeo*Uy&+r4=60/.Tv>Z0H2}:J%');
define('LOGGED_IN_KEY',    ')By2dnsR2coX+|GhMyTT15(sqQb%BbX=kJQ$NfK ^EuTgY8$OC^7pnFr1:MO?#1Y');
define('NONCE_KEY',        'e^/LnW>NS22Av3?<L@;.WQ._ACwqwN@[oZxl4,Y{ja5{tpSRM2{$:cV~eucBRs-g');
define('AUTH_SALT',        'n=PN]DDYb8>_.p{5`BmG#z{;p@5Hi7 ;&tEVOx*83u6_JGY()ZR5a<}-h-p*YW<7');
define('SECURE_AUTH_SALT', 'CS01@0 e;F.;29%$Jt0,%bQ]Y?/E(+IP,^SC5+hl<8T2Ogc]<r`nOkO$xuWTK!Gc');
define('LOGGED_IN_SALT',   'ZSAy[DDQ_L@Fp^b1{!RYcL}wGjBH[?.KLMc~1M#NS+Awrx1C,TakT~{30OWW ;[z');
define('NONCE_SALT',       '<B?0XE8lejU/uE3os4hH~h!DL?.8Lwnf$50`h93ScTZs8 -|8Ml}0}!+`i3.qkm%');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
