<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_69fe9dd3db7bcd721544b850ba36ca40860efb37a6c8a32542fd6dc1b5c96f60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
            // line 26
            echo "        ";
            $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : null)));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null)), "html", null, true);
        echo "
        ";
        // line 30
        if ((isset($context["required"]) ? $context["required"] : null)) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  810 => 492,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  702 => 472,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  634 => 456,  625 => 453,  620 => 451,  601 => 446,  549 => 411,  532 => 410,  345 => 147,  340 => 145,  328 => 139,  290 => 119,  259 => 103,  363 => 153,  190 => 76,  672 => 345,  664 => 342,  640 => 334,  631 => 327,  622 => 452,  606 => 449,  591 => 309,  559 => 296,  552 => 293,  519 => 278,  515 => 276,  505 => 270,  497 => 267,  471 => 253,  465 => 249,  463 => 248,  454 => 244,  438 => 236,  436 => 235,  428 => 230,  412 => 222,  410 => 221,  376 => 205,  353 => 328,  295 => 178,  449 => 198,  446 => 197,  441 => 196,  380 => 158,  373 => 156,  226 => 84,  207 => 75,  306 => 286,  303 => 106,  280 => 131,  236 => 109,  537 => 178,  520 => 170,  516 => 169,  496 => 161,  479 => 256,  475 => 152,  421 => 126,  414 => 122,  408 => 176,  403 => 117,  375 => 106,  372 => 105,  348 => 140,  325 => 129,  313 => 183,  292 => 135,  161 => 63,  222 => 83,  215 => 78,  191 => 67,  694 => 470,  685 => 406,  654 => 389,  647 => 336,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  592 => 351,  585 => 307,  579 => 342,  577 => 303,  571 => 338,  542 => 321,  538 => 319,  531 => 283,  526 => 310,  486 => 292,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  429 => 188,  366 => 210,  361 => 152,  331 => 140,  272 => 158,  267 => 101,  232 => 88,  347 => 191,  338 => 135,  319 => 92,  277 => 78,  265 => 105,  262 => 98,  257 => 149,  248 => 97,  239 => 97,  213 => 78,  211 => 81,  134 => 39,  127 => 35,  253 => 100,  212 => 78,  210 => 77,  202 => 94,  185 => 74,  167 => 48,  137 => 46,  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 491,  805 => 252,  802 => 251,  796 => 489,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 473,  698 => 471,  680 => 403,  677 => 465,  675 => 198,  671 => 196,  668 => 344,  665 => 194,  661 => 191,  658 => 391,  655 => 189,  651 => 337,  644 => 335,  642 => 238,  638 => 237,  635 => 236,  629 => 454,  626 => 325,  624 => 231,  619 => 228,  613 => 320,  608 => 223,  603 => 194,  596 => 189,  588 => 308,  584 => 174,  569 => 300,  566 => 167,  563 => 298,  557 => 295,  553 => 186,  550 => 185,  521 => 154,  518 => 307,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  482 => 142,  476 => 141,  467 => 137,  460 => 136,  431 => 189,  419 => 164,  416 => 163,  399 => 116,  386 => 159,  378 => 157,  367 => 339,  357 => 123,  350 => 327,  343 => 146,  330 => 105,  310 => 89,  300 => 105,  297 => 104,  291 => 102,  289 => 113,  270 => 102,  256 => 96,  250 => 93,  242 => 113,  228 => 68,  181 => 65,  710 => 475,  704 => 203,  701 => 202,  699 => 208,  693 => 205,  683 => 204,  678 => 398,  666 => 200,  663 => 393,  660 => 464,  652 => 193,  649 => 462,  632 => 190,  615 => 189,  610 => 224,  605 => 222,  602 => 317,  599 => 355,  593 => 310,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 160,  539 => 157,  533 => 284,  530 => 168,  527 => 408,  525 => 280,  522 => 406,  513 => 168,  509 => 272,  507 => 157,  504 => 302,  483 => 258,  477 => 127,  470 => 139,  464 => 147,  459 => 246,  450 => 141,  448 => 240,  443 => 137,  425 => 175,  422 => 226,  420 => 249,  411 => 129,  406 => 123,  400 => 214,  397 => 213,  395 => 118,  391 => 113,  385 => 116,  371 => 156,  358 => 151,  346 => 99,  344 => 119,  339 => 100,  336 => 99,  333 => 98,  321 => 135,  316 => 121,  308 => 287,  288 => 118,  286 => 112,  274 => 110,  266 => 66,  260 => 124,  251 => 101,  244 => 65,  225 => 87,  205 => 108,  200 => 72,  197 => 69,  194 => 68,  188 => 90,  184 => 63,  178 => 59,  129 => 57,  114 => 71,  77 => 25,  609 => 319,  598 => 188,  594 => 187,  586 => 184,  581 => 305,  575 => 170,  573 => 179,  567 => 414,  558 => 172,  554 => 171,  548 => 292,  545 => 291,  541 => 290,  536 => 170,  529 => 409,  524 => 162,  517 => 404,  514 => 306,  511 => 167,  506 => 166,  502 => 164,  499 => 268,  495 => 133,  492 => 295,  489 => 262,  485 => 143,  481 => 290,  478 => 127,  473 => 254,  462 => 202,  458 => 107,  451 => 134,  447 => 102,  442 => 101,  439 => 195,  424 => 128,  418 => 224,  415 => 180,  404 => 126,  401 => 172,  396 => 234,  394 => 168,  388 => 112,  382 => 127,  351 => 120,  334 => 141,  329 => 188,  327 => 114,  323 => 128,  320 => 127,  317 => 185,  307 => 128,  304 => 181,  301 => 117,  296 => 121,  281 => 114,  275 => 105,  255 => 101,  237 => 70,  233 => 87,  206 => 71,  198 => 66,  195 => 54,  192 => 88,  174 => 65,  172 => 57,  155 => 47,  148 => 64,  392 => 120,  389 => 160,  383 => 207,  377 => 99,  354 => 102,  352 => 123,  349 => 90,  342 => 137,  335 => 134,  332 => 116,  326 => 138,  324 => 113,  318 => 111,  315 => 131,  302 => 125,  299 => 83,  293 => 120,  287 => 68,  284 => 106,  282 => 66,  279 => 104,  276 => 111,  271 => 108,  263 => 95,  234 => 48,  231 => 83,  218 => 59,  216 => 79,  186 => 82,  180 => 62,  175 => 58,  90 => 27,  12 => 34,  160 => 76,  152 => 46,  113 => 40,  81 => 24,  70 => 19,  20 => 1,  126 => 42,  118 => 49,  170 => 84,  165 => 83,  150 => 55,  146 => 49,  84 => 25,  97 => 63,  153 => 77,  124 => 31,  110 => 38,  100 => 36,  65 => 17,  34 => 4,  104 => 31,  76 => 28,  58 => 15,  53 => 11,  23 => 18,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 131,  437 => 134,  435 => 258,  430 => 130,  427 => 129,  423 => 166,  413 => 130,  409 => 98,  407 => 242,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 130,  381 => 108,  379 => 126,  374 => 114,  368 => 103,  365 => 197,  362 => 178,  360 => 126,  355 => 329,  341 => 118,  337 => 87,  322 => 101,  314 => 85,  312 => 130,  309 => 129,  305 => 87,  298 => 120,  294 => 83,  285 => 175,  283 => 115,  278 => 98,  268 => 127,  264 => 2,  258 => 94,  252 => 70,  247 => 66,  241 => 93,  229 => 87,  220 => 81,  214 => 99,  177 => 61,  169 => 57,  140 => 58,  132 => 59,  128 => 58,  107 => 37,  61 => 23,  273 => 174,  269 => 107,  254 => 102,  243 => 92,  240 => 64,  238 => 139,  235 => 89,  230 => 106,  227 => 86,  224 => 81,  221 => 67,  219 => 101,  217 => 79,  208 => 76,  204 => 66,  179 => 98,  159 => 90,  143 => 51,  135 => 35,  119 => 40,  102 => 30,  71 => 23,  67 => 16,  63 => 21,  59 => 13,  38 => 5,  94 => 21,  89 => 30,  85 => 26,  75 => 22,  68 => 12,  56 => 12,  87 => 26,  21 => 2,  26 => 3,  93 => 28,  88 => 30,  78 => 24,  46 => 14,  27 => 7,  44 => 8,  31 => 3,  28 => 3,  201 => 106,  196 => 92,  183 => 50,  171 => 63,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 61,  138 => 61,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 29,  62 => 14,  49 => 12,  24 => 2,  25 => 12,  19 => 1,  79 => 29,  72 => 18,  69 => 26,  47 => 9,  40 => 11,  37 => 7,  22 => 2,  246 => 136,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 40,  111 => 47,  108 => 33,  101 => 33,  98 => 29,  96 => 35,  83 => 30,  74 => 22,  66 => 25,  55 => 12,  52 => 12,  50 => 10,  43 => 12,  41 => 7,  35 => 4,  32 => 6,  29 => 3,  209 => 96,  203 => 73,  199 => 93,  193 => 33,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 72,  162 => 59,  154 => 60,  149 => 50,  147 => 75,  144 => 42,  141 => 73,  133 => 49,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 39,  109 => 52,  106 => 51,  103 => 46,  99 => 23,  95 => 39,  92 => 31,  86 => 43,  82 => 25,  80 => 24,  73 => 23,  64 => 17,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 10,  45 => 8,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
