<?php

class TypeSquare_ST_Fontthemelist {
  private static $instance;

	private function __construct(){}

  public static function get_instance() {
		if ( ! isset( self::$instance ) ) {
			$c = __CLASS__;
			self::$instance = new $c();
		}
		return self::$instance;
	}

  public function get_fonttheme_list()
    {
      return array(
        "basic" => [
          "name" => "ベーシック",
          "fonts" => [
            "title" => "ゴシックMB101 M",
            "lead" => "UD黎ミン M",
            "content" => "ゴシックMB101 L",
            "bold" => "ゴシックMB101 M"
          ]
        ],
        "business" => [
          "name" => "ビジネス",
          "fonts" => [
            "title" => "UD黎ミン EB",
            "lead" => "TBUD明朝 M",
            "content" => "UD新ゴNT L",
            "bold" => "UD新ゴNT M"
          ]
        ],
        "pop" => [
          "name" => "ポップ",
          "fonts" => [
            "title" => "ぽっくる",
            "lead" => "新丸ゴ B",
            "content" => "丸フォーク R",
            "bold" => "丸フォーク B"
          ]
        ],
        "retro" => [
          "name" => "レトロ",
          "fonts" => [
            "title" => "シネマレター",
            "lead" => "TBカリグラゴシック R",
            "content" => "UD黎ミン M",
            "bold" => "UD黎ミン EB"
          ]
        ],
        "luxury" => [
          "name" => "ラグジュアリー",
          "fonts" => [
            "title" => "A1明朝",
            "lead" => "新正楷書CBSK1",
            "content" => "新丸ゴ L",
            "bold" => "新丸ゴ M"
          ]
        ],
        "wafu" => [
          "name" => "和風",
          "fonts" => [
            "title" => "新正楷書CBSK1",
            "lead" => "解ミン 月 B",
            "content" => "リュウミン M-KL",
            "bold" => "リュウミン EB-KL"
          ]
        ],
        "blog" => [
          "name" => "ブログ",
          "fonts" => [
            "title" => "新ゴ B",
            "lead" => "丸フォーク B",
            "content" => "新ゴ L",
            "bold" => "新ゴ M"
          ]
        ],
        "smartphone" => [
          "name" => "スマホ",
          "fonts" => [
            "title" => "UD新ゴNT B",
            "lead" => "UD新ゴNT M",
            "content" => "UD新ゴ コンデンス90 L",
            "bold" => "UD新ゴ コンデンス90 M"
          ]
        ]
      );
    }

  public function get_url()
    {
      return array(
        "file_domain" => "",
        "font_css" => "",
	      "font_json" => ""
      );
    }
}