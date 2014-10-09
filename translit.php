<?php

class Default_Text_Translit //extends Zend_Text
{
    /**
     * Russian transliteration by standard Passport 2010-
     */
    const RUSSIAN_PASSPORT_2010 = 1;

    /**
     * Bulgarian transliteration by standard oficial 2006
     */
    const BULGAR_OFFICIAL_2006 = 2;

    /**
     * Ukrainian transliteration by standard Passport 2007
     */
    const UKRAINIAN_PASSPORT_2007 = 3;

    /**
     * Macedonian transliteration by standard Passport
     */
    const MACEDONIAN_PASSPORT = 4;

    /**
     * Belarusian transliteration by standard BGN/PCGN
     */
    const BELARUSIAN_BGN_PCGN = 5;

    /**
     * Russian cyrylic dictionary by standard Passport 2010-
     * http://en.wikipedia.org/wiki/Romanization_of_Russian#Transliteration_table
     *
     * @var array
     */
    protected $_aGeneralCyrillic = array(
        /*?*/ "\xD0\x90" => 'A', /*?*/ "\xD0\xB0" => 'a',
        /*?*/ "\xD0\x91" => 'B', /*?*/ "\xD0\xB1" => 'b',
        /*?*/ "\xD0\x92" => 'V', /*?*/ "\xD0\xB2" => 'v',
        /*?*/ "\xD0\x93" => 'G', /*?*/ "\xD0\xB3" => 'g',
        /*?*/ "\xD0\x94" => 'D', /*?*/ "\xD0\xB4" => 'd',
        /*?*/ "\xD0\x95" => 'E', /*?*/ "\xD0\xB5" => 'e',
        /*?*/ "\xD0\x81" => 'E', /*?*/ "\xD1\x91" => 'e',
        /*?*/ "\xD0\x96" => 'Zh',/*?*/ "\xD0\xB6" => 'zh',
        /*?*/ "\xD0\x97" => 'Z', /*?*/ "\xD0\xB7" => 'z',
        /*?*/ "\xD0\x98" => 'I', /*?*/ "\xD0\xB8" => 'i',
        /*?*/ "\xD0\x99" => 'I', /*?*/ "\xD0\xB9" => 'i',
        /*?*/ "\xD0\x9A" => 'K', /*?*/ "\xD0\xBA" => 'k',
        /*?*/ "\xD0\x9B" => 'L', /*?*/ "\xD0\xBB" => 'l',
        /*?*/ "\xD0\x9C" => 'M', /*?*/ "\xD0\xBC" => 'm',
        /*?*/ "\xD0\x9D" => 'N', /*?*/ "\xD0\xBD" => 'n',
        /*?*/ "\xD0\x9E" => 'O', /*?*/ "\xD0\xBE" => 'o',
        /*?*/ "\xD0\x9F" => 'P', /*?*/ "\xD0\xBF" => 'p',
        /*?*/ "\xD0\xA0" => 'R', /*?*/ "\xD1\x80" => 'r',
        /*?*/ "\xD0\xA1" => 'S', /*?*/ "\xD1\x81" => 's',
        /*?*/ "\xD0\xA2" => 'T', /*?*/ "\xD1\x82" => 't',
        /*?*/ "\xD0\xA3" => 'U', /*?*/ "\xD1\x83" => 'u',
        /*?*/ "\xD0\xA4" => 'F', /*?*/ "\xD1\x84" => 'f',
        /*?*/ "\xD0\xA5" => 'Kh',/*?*/ "\xD1\x85" => 'kh',
        /*?*/ "\xD0\xA6" => 'Tc',/*?*/ "\xD1\x86" => 'tc',
        /*?*/ "\xD0\xA7" => 'Ch',/*?*/ "\xD1\x87" => 'ch',
        /*?*/ "\xD0\xA8" => 'Sh',/*?*/ "\xD1\x88" => 'sh',
        /*?*/ "\xD0\xA9" => 'Shch',/*?*/ "\xD1\x89" => 'shch',
        /*?*/ "\xD0\xAA" => '',  /*?*/ "\xD1\x8A" => '',
        /*?*/ "\xD0\xAB" => 'Y', /*?*/ "\xD1\x8B" => 'y',
        /*?*/ "\xD0\xAC" => '',  /*?*/ "\xD1\x8C" => '',
        /*?*/ "\xD0\xAD" => 'E', /*?*/ "\xD1\x8D" => 'e',
        /*?*/ "\xD0\xAE" => 'Iu',/*?*/ "\xD1\x8E" => 'iu',
        /*?*/ "\xD0\xAF" => 'Ia',/*?*/ "\xD1\x8F" => 'ia',
    );

    /**
     * Bulgarian cyrylic dictionary by standard
     * http://en.wikipedia.org/wiki/Romanization_of_Bulgarian#Comparison_table
     *
     * @var array
     */
    protected $_aBulgarCyrillic = array(
        /*?*/ "\xD0\x90" => 'A', /*?*/ "\xD0\xB0" => 'a',
        /*?*/ "\xD0\x91" => 'B', /*?*/ "\xD0\xB1" => 'b',
        /*?*/ "\xD0\x92" => 'V', /*?*/ "\xD0\xB2" => 'v',
        /*?*/ "\xD0\x93" => 'G', /*?*/ "\xD0\xB3" => 'g',
        /*?*/ "\xD0\x94" => 'D', /*?*/ "\xD0\xB4" => 'd',
        /*?*/ "\xD0\x95" => 'E', /*?*/ "\xD0\xB5" => 'e',
        /*?*/ "\xD0\x96" => 'Zh',/*?*/ "\xD0\xB6" => 'zh',
        /*?*/ "\xD0\xAD" => 'E', /*?*/ "\xD1\x8D" => 'e',
        /*?*/ "\xD0\x97" => 'Z', /*?*/ "\xD0\xB7" => 'z',
        /*?*/ "\xD0\x98" => 'I', /*?*/ "\xD0\xB8" => 'i',
        /*?*/ "\xD0\x99" => 'Y', /*?*/ "\xD0\xB9" => 'y',
        /*?*/ "\xD0\x9A" => 'K', /*?*/ "\xD0\xBA" => 'k',
        /*?*/ "\xD0\x9B" => 'L', /*?*/ "\xD0\xBB" => 'l',
        /*?*/ "\xD0\x9C" => 'M', /*?*/ "\xD0\xBC" => 'm',
        /*?*/ "\xD0\x9D" => 'N', /*?*/ "\xD0\xBD" => 'n',
        /*?*/ "\xD0\x9E" => 'O', /*?*/ "\xD0\xBE" => 'o',
        /*?*/ "\xD0\x9F" => 'P', /*?*/ "\xD0\xBF" => 'p',
        /*?*/ "\xD0\xA0" => 'R', /*?*/ "\xD1\x80" => 'r',
        /*?*/ "\xD0\xA1" => 'S', /*?*/ "\xD1\x81" => 's',
        /*?*/ "\xD0\xA2" => 'T', /*?*/ "\xD1\x82" => 't',
        /*?*/ "\xD0\xA3" => 'U', /*?*/ "\xD1\x83" => 'u',
        /*?*/ "\xD0\xA4" => 'F', /*?*/ "\xD1\x84" => 'f',
        /*?*/ "\xD0\xA5" => 'H', /*?*/ "\xD1\x85" => 'h',
        /*?*/ "\xD0\xA6" => 'Ts',/*?*/ "\xD1\x86" => 'ts',
        /*?*/ "\xD0\xA7" => 'Ch',/*?*/ "\xD1\x87" => 'ch',
        /*?*/ "\xD0\xA8" => 'Sh',/*?*/ "\xD1\x88" => 'sh',
        /*?*/ "\xD0\xA9" => 'Sht',/*?*/ "\xD1\x89" => 'sht',
        /*?*/ "\xD0\xAA" => 'A', /*?*/ "\xD1\x8A" => 'a',
        /*?*/ "\xD0\xAC" => 'Y', /*?*/ "\xD1\x8C" => 'y',
        /*?*/ "\xD0\xAE" => 'Yu',/*?*/ "\xD1\x8E" => 'yu',
        /*?*/ "\xD0\xAF" => 'Ya',/*?*/ "\xD1\x8F" => 'ya',
    );

    /**
     * Bulgarian cyrylic dictionary by standard Passport 2007
     * http://en.wikipedia.org/wiki/Romanization_of_Ukrainian#Tables_of_romanization_systems
     *
     * @var array
     */
    protected $_aUkrainianCyrillic = array(
        /*?*/ "\xD0\x90" => 'A', /*?*/ "\xD0\xB0" => 'a',
        /*?*/ "\xD0\x91" => 'B', /*?*/ "\xD0\xB1" => 'b',
        /*?*/ "\xD0\x92" => 'V', /*?*/ "\xD0\xB2" => 'v',
        /*?*/ "\xD0\x93" => 'G', /*?*/ "\xD0\xB3" => 'g',
        /*?*/ "\xD2\x90" => 'G', /*?*/ "\xD2\x91" => 'g',
        /*?*/ "\xD0\x94" => 'D', /*?*/ "\xD0\xB4" => 'd',
        /*?*/ "\xD0\x95" => 'E', /*?*/ "\xD0\xB5" => 'e',
        /*?*/ "\xD0\x84" => 'Ie',/*?*/ "\xD1\x94" => 'ie',
        /*?*/ "\xD0\x96" => 'Zh',/*?*/ "\xD0\xB6" => 'zh',
        /*?*/ "\xD0\x97" => 'Z', /*?*/ "\xD0\xB7" => 'z',
        /*?*/ "\xD0\x98" => 'Y', /*?*/ "\xD0\xB8" => 'y',
        /*?*/ "\xD0\x87" => 'I', /*?*/ "\xD1\x97" => 'i',
        /*?*/ "\xD0\x99" => 'I', /*?*/ "\xD0\xB9" => 'i',
        /*?*/ "\xD0\x9A" => 'K', /*?*/ "\xD0\xBA" => 'k',
        /*?*/ "\xD0\x9B" => 'L', /*?*/ "\xD0\xBB" => 'l',
        /*?*/ "\xD0\x9C" => 'M', /*?*/ "\xD0\xBC" => 'm',
        /*?*/ "\xD0\x9D" => 'N', /*?*/ "\xD0\xBD" => 'n',
        /*?*/ "\xD0\x9E" => 'O', /*?*/ "\xD0\xBE" => 'o',
        /*?*/ "\xD0\x9F" => 'P', /*?*/ "\xD0\xBF" => 'p',
        /*?*/ "\xD0\xA0" => 'R', /*?*/ "\xD1\x80" => 'r',
        /*?*/ "\xD0\xA1" => 'S', /*?*/ "\xD1\x81" => 's',
        /*?*/ "\xD0\xA2" => 'T', /*?*/ "\xD1\x82" => 't',
        /*?*/ "\xD0\xA3" => 'U', /*?*/ "\xD1\x83" => 'u',
        /*?*/ "\xD0\xA4" => 'F', /*?*/ "\xD1\x84" => 'f',
        /*?*/ "\xD0\xA5" => 'Kh',/*?*/ "\xD1\x85" => 'kh',
        /*?*/ "\xD0\xA6" => 'Ts',/*?*/ "\xD1\x86" => 'ts',
        /*?*/ "\xD0\xA7" => 'Ch',/*?*/ "\xD1\x87" => 'ch',
        /*?*/ "\xD0\xA8" => 'Sh',/*?*/ "\xD1\x88" => 'sh',
        /*?*/ "\xD0\xA9" => 'Shch',/*?*/ "\xD1\x89" => 'shch',
        /*?*/ "\xD0\xAC" => '',  /*?*/ "\xD1\x8C" => '',
        /*?*/ "\xD0\xAE" => 'Iu',/*?*/ "\xD1\x8E" => 'iu',
        /*?*/ "\xD0\xAF" => 'Ia',/*?*/ "\xD1\x8F" => 'ia',
    );

    /**
     * Macedonian cyrylic dictionary by standard Passport 2010-
     * http://en.wikipedia.org/wiki/Romanization_of_Macedonian
     *
     * @var array
     */
    protected $_aMacedonianCyrillic = array(
        /*?*/ "\xD0\x90" => 'A', /*?*/ "\xD0\xB0" => 'a',
        /*?*/ "\xD0\x91" => 'B', /*?*/ "\xD0\xB1" => 'b',
        /*?*/ "\xD0\x92" => 'V', /*?*/ "\xD0\xB2" => 'v',
        /*?*/ "\xD0\x93" => 'G', /*?*/ "\xD0\xB3" => 'g',
        /*?*/ "\xD0'x83" => 'Gj', /*?*/ "\xD1\x93" => 'dj',
        /*?*/ "\xD0\x95" => 'E', /*?*/ "\xD0\xB5" => 'e',
        /*?*/ "\xD0\x96" => 'Zh',/*?*/ "\xD0\xB6" => 'zh',
        /*?*/ "\xD0\x97" => 'Z', /*?*/ "\xD0\xB7" => 'z',
        /*S*/ "\xD0\x85" => 'Dz',/*s*/ "\xD1\x95" => 'dz',
        /*?*/ "\xD0\x98" => 'I', /*?*/ "\xD0\xB8" => 'i',
        /*J*/ "\xD0\x88" => 'J', /*j*/ "\xD1\x98" => 'j',
        /*?*/ "\xD0\x9A" => 'K', /*?*/ "\xD0\xBA" => 'k',
        /*?*/ "\xD0\x9B" => 'L', /*?*/ "\xD0\xBB" => 'l',
        /*?*/ "\xD0\x89" => 'Lj',/*?*/ "\xD199\x" => 'lj',
        /*?*/ "\xD0\x9C" => 'M', /*?*/ "\xD0\xBC" => 'm',
        /*?*/ "\xD0\x9D" => 'N', /*?*/ "\xD0\xBD" => 'n',
        /*?*/ "\xD0\x8A" => 'Nj',/*?*/ "\xD1\x9A" => 'nj',
        /*?*/ "\xD0\x9E" => 'O', /*?*/ "\xD0\xBE" => 'o',
        /*?*/ "\xD0\x9F" => 'P', /*?*/ "\xD0\xBF" => 'p',
        /*?*/ "\xD0\xA0" => 'R', /*?*/ "\xD1\x80" => 'r',
        /*?*/ "\xD0\xA1" => 'S', /*?*/ "\xD1\x81" => 's',
        /*?*/ "\xD0\xA2" => 'T', /*?*/ "\xD1\x82" => 't',
        /*?*/ "\xD0\x8C" => 'Kj',/*?*/ "\xD1\x9C" => 'kj',
        /*?*/ "\xD0\xA3" => 'U', /*?*/ "\xD1\x83" => 'u',
        /*?*/ "\xD0\xA4" => 'F', /*?*/ "\xD1\x84" => 'f',
        /*?*/ "\xD0\xA5" => 'Kh',/*?*/ "\xD1\x85" => 'kh',
        /*?*/ "\xD0\xA6" => 'C',/*?*/ "\xD1\x86" => 'c',
        /*?*/ "\xD0\xA7" => 'Ch',/*?*/ "\xD1\x87" => 'ch',
        /*?*/ "\xD0\x8F" => 'Dj', /*?*/ "\xD1\x9F" => 'dj',
        /*?*/ "\xD0\xA8" => 'Sh',/*?*/ "\xD1\x88" => 'sh',
    );

    /**
     * Belarusian cyrylic dictionary by standard BGN/PCGN
     * http://en.wikipedia.org/wiki/Romanization_of_Belarusian
     *
     * @var array
     */
    protected $_aBelarusianCyrillic = array(
        /*?*/ "\xD0\x90" => 'A', /*?*/ "\xD0\xB0" => 'a',
        /*?*/ "\xD0\x91" => 'B', /*?*/ "\xD0\xB1" => 'b',
        /*?*/ "\xD0\x92" => 'V', /*?*/ "\xD0\xB2" => 'v',
        /*?*/ "\xD0\x93" => 'H', /*?*/ "\xD0\xB3" => 'h',
        /*?*/ "\xD2\x90" => '',  /*?*/ "\xD2\x91" => '',
        /*?*/ "\xD0\x94" => 'D', /*?*/ "\xD0\xB4" => 'd',
        /*?*/ "\xD0\x95" => 'Ye',/*?*/ "\xD0\xB5" => 'ye',
        /*?*/ "\xD0\x81" => 'Yo',/*?*/ "\xD1\x91" => 'yo',
        /*?*/ "\xD0\x96" => 'Zh',/*?*/ "\xD0\xB6" => 'zh',
        /*?*/ "\xD0\x97" => 'Z', /*?*/ "\xD0\xB7" => 'z',
        /*?*/ "\xD0\x86" => 'I', /*?*/ "\xD1\x96" => 'i',
        /*?*/ "\xD0\x99" => 'I', /*?*/ "\xD0\xB9" => 'i',
        /*?*/ "\xD0\x9A" => 'K', /*?*/ "\xD0\xBA" => 'k',
        /*?*/ "\xD0\x9B" => 'L', /*?*/ "\xD0\xBB" => 'l',
        /*?*/ "\xD0\x9C" => 'M', /*?*/ "\xD0\xBC" => 'm',
        /*?*/ "\xD0\x9D" => 'N', /*?*/ "\xD0\xBD" => 'n',
        /*?*/ "\xD0\x9E" => 'O', /*?*/ "\xD0\xBE" => 'o',
        /*?*/ "\xD0\x9F" => 'P', /*?*/ "\xD0\xBF" => 'p',
        /*?*/ "\xD0\xA0" => 'R', /*?*/ "\xD1\x80" => 'r',
        /*?*/ "\xD0\xA1" => 'S', /*?*/ "\xD1\x81" => 's',
        /*?*/ "\xD0\xA2" => 'T', /*?*/ "\xD1\x82" => 't',
        /*?*/ "\xD0\xA3" => 'U', /*?*/ "\xD1\x83" => 'u',
        /*?*/ "\xD0\x8E" => 'W', /*?*/ "\xD1\x9E" => 'w',
        /*?*/ "\xD0\xA4" => 'F', /*?*/ "\xD1\x84" => 'f',
        /*?*/ "\xD0\xA5" => 'Kh',/*?*/ "\xD1\x85" => 'kh',
        /*?*/ "\xD0\xA6" => 'Ts',/*?*/ "\xD1\x86" => 'ts',
        /*?*/ "\xD0\xA7" => 'Ch',/*?*/ "\xD1\x87" => 'ch',
        /*?*/ "\xD0\xA8" => 'Sh',/*?*/ "\xD1\x88" => 'sh',
        /*?*/ "\xC2\x92" => "",
        /*?*/ "\xD0\xAB" => 'Y', /*?*/ "\xD1\x8B" => 'y',
        /*?*/ "\xD0\xAC" => '',  /*?*/ "\xD1\x8C" => '',
        /*?*/ "\xD0\xAD" => 'E', /*?*/ "\xD1\x8D" => 'e',
        /*?*/ "\xD0\xAE" => 'Yu',/*?*/ "\xD1\x8E" => 'yu',
        /*?*/ "\xD0\xAF" => 'Ya',/*?*/ "\xD1\x8F" => 'ya',
    );

    /**
     * Array for removing national accents downloaded from
     * http://stuffofinterest.com/misc/utf8-about.html
     *
	 * This array is not used in the current implementation but might
	 * be usefull if there's no iconv on the server.
	 *
     * @var array
     */
    protected $_aAccents = array(
        "\xC3\x80" => "A", "\xC3\x81" => "A", "\xC3\x82" => "A", "\xC3\x83" => "A",
        "\xC3\x84" => "A", "\xC3\x85" => "A", "\xC3\x86" => "AE",  "\xC3\x87" => "C",
        "\xC3\x88" => "E", "\xC3\x89" => "E", "\xC3\x8A" => "E", "\xC3\x8B" => "E",
        "\xC3\x8C" => "I", "\xC3\x8D" => "I", "\xC3\x8E" => "I", "\xC3\x8F" => "I",
        "\xC3\x90" => "D", "\xC3\x91" => "N", "\xC3\x92" => "O", "\xC3\x93" => "O",
        "\xC3\x94" => "O", "\xC3\x95" => "O", "\xC3\x96" => "O", "\xC3\x98" => "O",
        "\xC3\x99" => "U", "\xC3\x9A" => "U", "\xC3\x9B" => "U", "\xC3\x9C" => "U",
        "\xC3\x9D" => "Y", "\xC3\x9E" => "P", "\xC3\x9F" => "ss",
        "\xC3\xA0" => "a", "\xC3\xA1" => "a", "\xC3\xA2" => "a", "\xC3\xA3" => "a",
        "\xC3\xA4" => "a", "\xC3\xA5" => "a", "\xC3\xA6" => "ae",  "\xC3\xA7" => "c",
        "\xC3\xA8" => "e", "\xC3\xA9" => "e", "\xC3\xAA" => "e", "\xC3\xAB" => "e",
        "\xC3\xAC" => "i", "\xC3\xAD" => "i", "\xC3\xAE" => "i", "\xC3\xAF" => "i",
        "\xC3\xB0" => "o", "\xC3\xB1" => "n", "\xC3\xB2" => "o", "\xC3\xB3" => "o",
        "\xC3\xB4" => "o", "\xC3\xB5" => "o", "\xC3\xB6" => "o", "\xC3\xB8" => "o",
        "\xC3\xB9" => "u", "\xC3\xBA" => "u", "\xC3\xBB" => "u", "\xC3\xBC" => "u",
        "\xC3\xBD" => "y", "\xC3\xBE" => "p", "\xC3\xBF" => "y",
        "\xC4\x80" => "A", "\xC4\x81" => "a", "\xC4\x82" => "A", "\xC4\x83" => "a",
        "\xC4\x84" => "A", "\xC4\x85" => "a", "\xC4\x86" => "C", "\xC4\x87" => "c",
        "\xC4\x88" => "C", "\xC4\x89" => "c", "\xC4\x8A" => "C", "\xC4\x8B" => "c",
        "\xC4\x8C" => "C", "\xC4\x8D" => "c", "\xC4\x8E" => "D", "\xC4\x8F" => "d",
        "\xC4\x90" => "D", "\xC4\x91" => "d", "\xC4\x92" => "E", "\xC4\x93" => "e",
        "\xC4\x94" => "E", "\xC4\x95" => "e", "\xC4\x96" => "E", "\xC4\x97" => "e",
        "\xC4\x98" => "E", "\xC4\x99" => "e", "\xC4\x9A" => "E", "\xC4\x9B" => "e",
        "\xC4\x9C" => "G", "\xC4\x9D" => "g", "\xC4\x9E" => "G", "\xC4\x9F" => "g",
        "\xC4\xA0" => "G", "\xC4\xA1" => "g", "\xC4\xA2" => "G", "\xC4\xA3" => "g",
        "\xC4\xA4" => "H", "\xC4\xA5" => "h", "\xC4\xA6" => "H", "\xC4\xA7" => "h",
        "\xC4\xA8" => "I", "\xC4\xA9" => "i", "\xC4\xAA" => "I", "\xC4\xAB" => "i",
        "\xC4\xAC" => "I", "\xC4\xAD" => "i", "\xC4\xAE" => "I", "\xC4\xAF" => "i",
        "\xC4\xB0" => "I", "\xC4\xB1" => "i", "\xC4\xB2" => "IJ",  "\xC4\xB3" => "ij",
        "\xC4\xB4" => "J", "\xC4\xB5" => "j", "\xC4\xB6" => "K", "\xC4\xB7" => "k",
        "\xC4\xB8" => "k", "\xC4\xB9" => "L", "\xC4\xBA" => "l", "\xC4\xBB" => "L",
        "\xC4\xBC" => "l", "\xC4\xBD" => "L", "\xC4\xBE" => "l", "\xC4\xBF" => "L",
        "\xC5\x80" => "l", "\xC5\x81" => "L", "\xC5\x82" => "l", "\xC5\x83" => "N",
        "\xC5\x84" => "n", "\xC5\x85" => "N", "\xC5\x86" => "n", "\xC5\x87" => "N",
        "\xC5\x88" => "n", "\xC5\x89" => "n", "\xC5\x8A" => "N", "\xC5\x8B" => "n",
        "\xC5\x8C" => "O", "\xC5\x8D" => "o", "\xC5\x8E" => "O", "\xC5\x8F" => "o",
        "\xC5\x90" => "O", "\xC5\x91" => "o", "\xC5\x92" => "CE",  "\xC5\x93" => "ce",
        "\xC5\x94" => "R", "\xC5\x95" => "r", "\xC5\x96" => "R", "\xC5\x97" => "r",
        "\xC5\x98" => "R", "\xC5\x99" => "r", "\xC5\x9A" => "S", "\xC5\x9B" => "s",
        "\xC5\x9C" => "S", "\xC5\x9D" => "s", "\xC5\x9E" => "S", "\xC5\x9F" => "s",
        "\xC5\xA0" => "S", "\xC5\xA1" => "s", "\xC5\xA2" => "T", "\xC5\xA3" => "t",
        "\xC5\xA4" => "T", "\xC5\xA5" => "t", "\xC5\xA6" => "T", "\xC5\xA7" => "t",
        "\xC5\xA8" => "U", "\xC5\xA9" => "u", "\xC5\xAA" => "U", "\xC5\xAB" => "u",
        "\xC5\xAC" => "U", "\xC5\xAD" => "u", "\xC5\xAE" => "U", "\xC5\xAF" => "u",
        "\xC5\xB0" => "U", "\xC5\xB1" => "u", "\xC5\xB2" => "U", "\xC5\xB3" => "u",
        "\xC5\xB4" => "W", "\xC5\xB5" => "w", "\xC5\xB6" => "Y", "\xC5\xB7" => "y",
        "\xC5\xB8" => "Y", "\xC5\xB9" => "Z", "\xC5\xBA" => "z", "\xC5\xBB" => "Z",
        "\xC5\xBC" => "z", "\xC5\xBD" => "Z", "\xC5\xBE" => "z", "\xC6\x8F" => "E",
        "\xC6\xA0" => "O", "\xC6\xA1" => "o", "\xC6\xAF" => "U", "\xC6\xB0" => "u",
        "\xC7\x8D" => "A", "\xC7\x8E" => "a", "\xC7\x8F" => "I",
        "\xC7\x90" => "i", "\xC7\x91" => "O", "\xC7\x92" => "o", "\xC7\x93" => "U",
        "\xC7\x94" => "u", "\xC7\x95" => "U", "\xC7\x96" => "u", "\xC7\x97" => "U",
        "\xC7\x98" => "u", "\xC7\x99" => "U", "\xC7\x9A" => "u", "\xC7\x9B" => "U",
        "\xC7\x9C" => "u",
        "\xC7\xBA" => "A", "\xC7\xBB" => "a", "\xC7\xBC" => "AE",  "\xC7\xBD" => "ae",
        "\xC7\xBE" => "O", "\xC7\xBF" => "o",
        "\xC9\x99" => "e",

        "\xC2\x82" => ",",    // High code comma
        "\xC2\x84" => ",,",   // High code double comma
        "\xC2\x85" => "...",  // Tripple dot
        "\xC2\x88" => "^",    // High carat
        "\xC2\x91" => "\x27",   // Forward single quote
        "\xC2\x92" => "\x27",   // Reverse single quote
        "\xC2\x93" => "\x22",   // Forward double quote
        "\xC2\x94" => "\x22",   // Reverse double quote
        "\xC2\x96" => "-",    // High hyphen
        "\xC2\x97" => "--",   // Double hyphen
        "\xC2\xA6" => "|",    // Split vertical bar
        "\xC2\xAB" => "<<",   // Double less than
        "\xC2\xBB" => ">>",   // Double greater than
        "\xC2\xBC" => "1/4",  // one quarter
        "\xC2\xBD" => "1/2",  // one half
        "\xC2\xBE" => "3/4",  // three quarters

        "\xCA\xBF" => "\x27",   // c-single quote
        "\xCC\xA8" => "",   // modifier - under curve
        "\xCC\xB1" => ""    // modifier - under line
    );

    protected static $_obInstance;

    protected function __construct()
    {

    }

    /**
     *
     * @return Default_Text_Translit
     */
    public static function getInstance()
    {
        if (!isset(self::$_obInstance)) {
            self::$_obInstance = new self();
        }
        return self::$_obInstance;
    }

    /**
     * Converts given text to ASCII only characters (strips national accents)
     * @param string $sFrom Text to be converted
     * @return string ASCII only representation
     *
     * @author Tomasz Kaplonski
     */
    public function utf2ascii($sFrom)
    {
        $aRepl = array(
            "\n" => "", '"' => '', "'" => '',
            "(" => "\(", ")" => "\)");
        return strtr(iconv("UTF-8", "ASCII//TRANSLIT", $sFrom), $aRepl);
    }

    /**
     * Converts cyrylic to latin representation
     * @param string $str Text to be converted
     * @param int $country Country id for convertion
     * @return string
     */
    public function cyr2lat($str, $country = 1)
    {
        switch ($country) {
            case self::BULGAR_OFFICIAL_2006:
                $aStandard = $this->_aBulgarCyrillic;
                break;
            case self::UKRAINIAN_PASSPORT_2007:
                $aStandard = $this->_aUkrainianCyrillic;
                break;
            case self::MACEDONIAN_PASSPORT:
                $aStandard = $this->_aMacedonianCyrillic;
                break;
            case self::BELARUSIAN_BGN_PCGN:
                $aStandard = $this->_aBelarusianCyrillic;
                break;
            case self::RUSSIAN_PASSPORT_2010:
            default: //Russian cyrylic is most commonly used so it's default value
                $aStandard = $this->_aGeneralCyrillic;
                break;
        }

        return strtr($str, $aStandard);
    }
}