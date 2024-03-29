<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_65b365c8c3d8cfa2ef01247a89db8f84b3cee11d821f78b193167d59eab13e6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  449 => 198,  446 => 197,  441 => 196,  380 => 160,  373 => 156,  226 => 84,  207 => 75,  306 => 141,  303 => 122,  280 => 131,  236 => 109,  537 => 178,  520 => 170,  516 => 169,  496 => 161,  479 => 153,  475 => 152,  421 => 126,  414 => 122,  408 => 176,  403 => 117,  375 => 106,  372 => 105,  348 => 140,  325 => 129,  313 => 90,  292 => 135,  161 => 63,  222 => 81,  215 => 78,  191 => 67,  694 => 412,  685 => 406,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  592 => 351,  585 => 347,  579 => 342,  577 => 341,  571 => 338,  542 => 321,  538 => 319,  531 => 175,  526 => 310,  486 => 292,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  429 => 188,  366 => 210,  361 => 146,  331 => 187,  272 => 158,  267 => 101,  232 => 84,  347 => 134,  338 => 135,  319 => 92,  277 => 78,  265 => 126,  262 => 98,  257 => 149,  248 => 94,  239 => 97,  213 => 78,  211 => 81,  134 => 54,  127 => 32,  253 => 95,  212 => 74,  210 => 75,  202 => 77,  185 => 66,  167 => 48,  137 => 46,  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  698 => 201,  680 => 403,  677 => 199,  675 => 198,  671 => 196,  668 => 395,  665 => 194,  661 => 191,  658 => 391,  655 => 189,  651 => 280,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  608 => 223,  603 => 194,  596 => 189,  588 => 179,  584 => 174,  569 => 168,  566 => 167,  563 => 166,  557 => 330,  553 => 186,  550 => 185,  521 => 154,  518 => 307,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  482 => 142,  476 => 141,  467 => 137,  460 => 136,  431 => 189,  419 => 164,  416 => 163,  399 => 116,  386 => 111,  378 => 117,  367 => 180,  357 => 125,  350 => 117,  343 => 132,  330 => 105,  310 => 89,  300 => 121,  297 => 77,  291 => 169,  289 => 113,  270 => 102,  256 => 96,  250 => 93,  242 => 113,  228 => 68,  181 => 65,  710 => 213,  704 => 203,  701 => 202,  699 => 208,  693 => 205,  683 => 204,  678 => 398,  666 => 200,  663 => 393,  660 => 198,  652 => 193,  649 => 273,  632 => 190,  615 => 189,  610 => 224,  605 => 222,  602 => 185,  599 => 355,  593 => 188,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 160,  539 => 157,  533 => 156,  530 => 168,  527 => 167,  525 => 172,  522 => 165,  513 => 168,  509 => 304,  507 => 157,  504 => 302,  483 => 154,  477 => 127,  470 => 139,  464 => 147,  459 => 145,  450 => 141,  448 => 139,  443 => 137,  425 => 175,  422 => 184,  420 => 249,  411 => 129,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 113,  385 => 116,  371 => 182,  358 => 139,  346 => 99,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  321 => 123,  316 => 121,  308 => 88,  288 => 107,  286 => 112,  274 => 129,  266 => 66,  260 => 124,  251 => 101,  244 => 65,  225 => 87,  205 => 38,  200 => 72,  197 => 71,  194 => 70,  188 => 49,  184 => 64,  178 => 66,  129 => 57,  114 => 71,  77 => 27,  609 => 362,  598 => 188,  594 => 187,  586 => 184,  581 => 345,  575 => 170,  573 => 179,  567 => 337,  558 => 172,  554 => 171,  548 => 184,  545 => 169,  541 => 180,  536 => 170,  529 => 164,  524 => 162,  517 => 161,  514 => 306,  511 => 167,  506 => 166,  502 => 164,  499 => 163,  495 => 133,  492 => 295,  489 => 157,  485 => 143,  481 => 290,  478 => 127,  473 => 140,  462 => 202,  458 => 107,  451 => 134,  447 => 102,  442 => 101,  439 => 195,  424 => 128,  418 => 113,  415 => 180,  404 => 126,  401 => 172,  396 => 234,  394 => 168,  388 => 112,  382 => 127,  351 => 141,  334 => 120,  329 => 131,  327 => 126,  323 => 128,  320 => 127,  317 => 101,  307 => 82,  304 => 174,  301 => 117,  296 => 82,  281 => 105,  275 => 105,  255 => 74,  237 => 70,  233 => 87,  206 => 71,  198 => 66,  195 => 54,  192 => 88,  174 => 60,  172 => 64,  155 => 53,  148 => 64,  392 => 120,  389 => 103,  383 => 224,  377 => 99,  354 => 102,  352 => 123,  349 => 90,  342 => 137,  335 => 134,  332 => 85,  326 => 185,  324 => 82,  318 => 145,  315 => 125,  302 => 84,  299 => 83,  293 => 109,  287 => 68,  284 => 106,  282 => 66,  279 => 104,  276 => 64,  271 => 108,  263 => 125,  234 => 48,  231 => 47,  218 => 59,  216 => 79,  186 => 82,  180 => 62,  175 => 65,  90 => 27,  12 => 34,  160 => 76,  152 => 92,  113 => 48,  81 => 23,  70 => 19,  20 => 11,  126 => 42,  118 => 49,  170 => 79,  165 => 60,  150 => 55,  146 => 49,  84 => 24,  97 => 63,  153 => 56,  124 => 31,  110 => 51,  100 => 39,  65 => 30,  34 => 16,  104 => 49,  76 => 31,  58 => 23,  53 => 12,  23 => 18,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 135,  453 => 199,  444 => 149,  440 => 131,  437 => 134,  435 => 258,  430 => 130,  427 => 129,  423 => 166,  413 => 130,  409 => 98,  407 => 242,  402 => 130,  398 => 129,  393 => 114,  387 => 164,  384 => 130,  381 => 108,  379 => 126,  374 => 114,  368 => 103,  365 => 141,  362 => 178,  360 => 126,  355 => 143,  341 => 131,  337 => 87,  322 => 101,  314 => 85,  312 => 124,  309 => 117,  305 => 87,  298 => 120,  294 => 83,  285 => 111,  283 => 166,  278 => 106,  268 => 127,  264 => 2,  258 => 72,  252 => 70,  247 => 66,  241 => 90,  229 => 85,  220 => 81,  214 => 99,  177 => 61,  169 => 57,  140 => 58,  132 => 59,  128 => 58,  107 => 52,  61 => 25,  273 => 96,  269 => 100,  254 => 102,  243 => 89,  240 => 64,  238 => 139,  235 => 56,  230 => 106,  227 => 134,  224 => 103,  221 => 67,  219 => 101,  217 => 79,  208 => 124,  204 => 66,  179 => 66,  159 => 70,  143 => 48,  135 => 35,  119 => 40,  102 => 40,  71 => 55,  67 => 24,  63 => 24,  59 => 14,  38 => 6,  94 => 35,  89 => 40,  85 => 34,  75 => 39,  68 => 31,  56 => 24,  87 => 34,  21 => 12,  26 => 14,  93 => 34,  88 => 60,  78 => 40,  46 => 13,  27 => 3,  44 => 19,  31 => 15,  28 => 14,  201 => 65,  196 => 65,  183 => 50,  171 => 63,  166 => 100,  163 => 45,  158 => 62,  156 => 58,  151 => 59,  142 => 61,  138 => 61,  136 => 60,  121 => 50,  117 => 51,  105 => 34,  91 => 34,  62 => 29,  49 => 14,  24 => 13,  25 => 12,  19 => 1,  79 => 37,  72 => 37,  69 => 24,  47 => 19,  40 => 18,  37 => 17,  22 => 12,  246 => 93,  157 => 104,  145 => 52,  139 => 60,  131 => 48,  123 => 42,  120 => 56,  115 => 50,  111 => 47,  108 => 48,  101 => 73,  98 => 47,  96 => 37,  83 => 33,  74 => 34,  66 => 25,  55 => 16,  52 => 20,  50 => 20,  43 => 12,  41 => 18,  35 => 6,  32 => 5,  29 => 15,  209 => 96,  203 => 73,  199 => 67,  193 => 33,  189 => 71,  187 => 87,  182 => 85,  176 => 63,  173 => 42,  168 => 61,  164 => 72,  162 => 59,  154 => 60,  149 => 50,  147 => 54,  144 => 68,  141 => 51,  133 => 49,  130 => 46,  125 => 51,  122 => 44,  116 => 39,  112 => 52,  109 => 40,  106 => 45,  103 => 46,  99 => 31,  95 => 43,  92 => 45,  86 => 43,  82 => 33,  80 => 32,  73 => 20,  64 => 23,  60 => 22,  57 => 20,  54 => 25,  51 => 24,  48 => 40,  45 => 10,  42 => 18,  39 => 17,  36 => 17,  33 => 4,  30 => 3,);
    }
}
