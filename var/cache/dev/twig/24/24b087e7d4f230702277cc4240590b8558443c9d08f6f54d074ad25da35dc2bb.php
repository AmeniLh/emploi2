<?php

/* EmploiBundle:Admin:creerClasse.html.twig */
class __TwigTemplate_68d9b3fa05bf198b44e2687bcec2027fc0234e776c0cdc33dcda22039f1084a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "EmploiBundle:Admin:creerClasse.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_title' => array($this, 'block_page_title'),
            'avanzu_sidebar' => array($this, 'block_avanzu_sidebar'),
            'page_content' => array($this, 'block_page_content'),
            'avanzu_admin_footer' => array($this, 'block_avanzu_admin_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d8aeb23200375a4755e07d11a39c315ab2342077e0a37b23d8ffdb31e07dbb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d8aeb23200375a4755e07d11a39c315ab2342077e0a37b23d8ffdb31e07dbb1->enter($__internal_7d8aeb23200375a4755e07d11a39c315ab2342077e0a37b23d8ffdb31e07dbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmploiBundle:Admin:creerClasse.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d8aeb23200375a4755e07d11a39c315ab2342077e0a37b23d8ffdb31e07dbb1->leave($__internal_7d8aeb23200375a4755e07d11a39c315ab2342077e0a37b23d8ffdb31e07dbb1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e4067b791fd6836e1d290c69c9ddc570507a025a274e83b3eaaa797644340be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e4067b791fd6836e1d290c69c9ddc570507a025a274e83b3eaaa797644340be->enter($__internal_4e4067b791fd6836e1d290c69c9ddc570507a025a274e83b3eaaa797644340be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion Classes";
        
        $__internal_4e4067b791fd6836e1d290c69c9ddc570507a025a274e83b3eaaa797644340be->leave($__internal_4e4067b791fd6836e1d290c69c9ddc570507a025a274e83b3eaaa797644340be_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_1603b7c09f3584c94ebe63ce0fad749d00f344a469f41b777604330c14c2a729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1603b7c09f3584c94ebe63ce0fad749d00f344a469f41b777604330c14c2a729->enter($__internal_1603b7c09f3584c94ebe63ce0fad749d00f344a469f41b777604330c14c2a729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Gestion Classes";
        
        $__internal_1603b7c09f3584c94ebe63ce0fad749d00f344a469f41b777604330c14c2a729->leave($__internal_1603b7c09f3584c94ebe63ce0fad749d00f344a469f41b777604330c14c2a729_prof);

    }

    // line 4
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_5acf52a2f01e630620eb110e316744d23b8b6117f7418e04dfae8337ab6e38f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5acf52a2f01e630620eb110e316744d23b8b6117f7418e04dfae8337ab6e38f9->enter($__internal_5acf52a2f01e630620eb110e316744d23b8b6117f7418e04dfae8337ab6e38f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        // line 5
        echo "    ";
        $this->loadTemplate("EmploiBundle:Admin:sidebarAdmin.html.twig", "EmploiBundle:Admin:creerClasse.html.twig", 5)->display($context);
        
        $__internal_5acf52a2f01e630620eb110e316744d23b8b6117f7418e04dfae8337ab6e38f9->leave($__internal_5acf52a2f01e630620eb110e316744d23b8b6117f7418e04dfae8337ab6e38f9_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_d20fae36f8198fdfcac0b43d5c3de58bfd2fe648d9b47d6a870d223b646c6970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d20fae36f8198fdfcac0b43d5c3de58bfd2fe648d9b47d6a870d223b646c6970->enter($__internal_d20fae36f8198fdfcac0b43d5c3de58bfd2fe648d9b47d6a870d223b646c6970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 8
        echo "    <!-- Bloc Tab classes -->
    <div class=\"nav-tabs-custom\">
        <ul class=\"nav nav-tabs\">
            <li class=\"\"><a href=\"#tab_1\" data-toggle=\"tab\" aria-expanded=\"true\">Ajouter une classe</a></li>
            <li class=\"active\"><a href=\"#tab_2\" data-toggle=\"tab\" aria-expanded=\"true\">Afficher les classes</a></li>
            <!--<li class=\"\"><a href=\"#tab_3\" data-toggle=\"tab\" aria-expanded=\"false\">Tab 3</a></li>
            <li class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\">
                    Dropdown <span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Action</a></li>
                    <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Another action</a></li>
                    <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Something else here</a></li>
                    <li role=\"presentation\" class=\"divider\"></li>
                    <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Separated link</a></li>
                </ul>
            </li>
            <li class=\"pull-right\"><a href=\"#\" class=\"text-muted\"><i class=\"fa fa-gear\"></i></a></li>-->
        </ul>
        <div class=\"tab-content\">
            <div class=\"tab-pane\" id=\"tab_1\">
                <div style=\"    width: 50%;    margin-left: 25%;    align: center;\">
                    <div class=\"form-group\">
                        <label for=\"exampleInputEmail1\">Classe</label>
                        <input type=\"email\" class=\"form-control\"  placeholder=\"Ex. 1 CP 2 \">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputEmail1\">Description</label>
                        <input type=\"email\" class=\"form-control\"  placeholder=\"Ex. 1 Classe Primaire 2\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Creer classe</button> <button type=\"reset\" class=\"btn btn-default\">Cancel</button>
                </div>
            </div>
            <!-- /.tab-pane -->
            <div class=\"tab-pane active\" id=\"tab_2\">

                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Liste des classes</h3>

                        <div class=\"box-tools\">
                            <div class=\"input-group input-group-sm\" style=\"width: 150px;\">
                                <input type=\"text\" name=\"table_search\" class=\"form-control pull-right\" placeholder=\"Search\">

                                <div class=\"input-group-btn\">
                                    <button type=\"submit\" class=\"btn btn-default\"><i class=\"fa fa-search\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class=\"box-body table-responsive no-padding\">
                        <table class=\"table table-hover\">
                            <tbody><tr>
                                <th>ID</th>
                                <th>Classe</th>
                                <th>Description</th>
                                <th>Statut</th>
                                <th>Action</th>

                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1 CP 1</td>
                                <td>1 Classe Primaire 1</td>
                                <td>
                                    <div class=\"progress progress-xs\">
                                        <div class=\"progress-bar progress-bar-yellow\" style=\"width: 70%\"></div>
                                    </div>
                                </td>
                                <td><span class=\"label label-primary\">Modifier</span> <span class=\"label label-danger\">Supprimer</span></td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td>1 CP 2</td>
                                <td>1 Classe Primaire 2</td>
                                <td>
                                    <div class=\"progress progress-xs\">
                                        <div class=\"progress-bar progress-bar-yellow\" style=\"width: 40%\"></div>
                                    </div>
                                </td>
                                <td><span class=\"label label-primary\">Modifier</span> <span class=\"label label-danger\">Supprimer</span></td>

                            </tr>
                            <tr>
                                <td>3</td>
                                <td>2 CP 1</td>
                                <td>2 Classe Primaire 1</td>
                                <td>
                                    <div class=\"progress progress-xs\">
                                        <div class=\"progress-bar progress-bar-yellow\" style=\"width: 90%\"></div>
                                    </div>
                                </td>
                                <td><span class=\"label label-primary\">Modifier</span> <span class=\"label label-danger\">Supprimer</span></td>

                            </tr>
                            <tr>
                                <td>4</td>
                                <td>3 CP 1</td>
                                <td>3 Classe Primaire 1</td>
                                <td>
                                    <div class=\"progress progress-xs progress-striped active\">
                                        <div class=\"progress-bar progress-bar-success\" style=\"width: 100%\"></div>
                                    </div>
                                </td>
                                <td><span class=\"label label-primary\">Modifier</span> <span class=\"label label-danger\">Supprimer</span></td>

                            </tr>
                            </tbody></table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <!-- /.tab-pane -->
           <!-- <div class=\"tab-pane\" id=\"tab_3\">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
            <!-- /.tab-pane -->
        </div>
    </div>
    <!-- Fin Bloc Tab classes -->
";
        
        $__internal_d20fae36f8198fdfcac0b43d5c3de58bfd2fe648d9b47d6a870d223b646c6970->leave($__internal_d20fae36f8198fdfcac0b43d5c3de58bfd2fe648d9b47d6a870d223b646c6970_prof);

    }

    // line 138
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_b43ec6143ab1c37f8726c8eb41ef1988f41fc695a8dd114a246d7303332733a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b43ec6143ab1c37f8726c8eb41ef1988f41fc695a8dd114a246d7303332733a4->enter($__internal_b43ec6143ab1c37f8726c8eb41ef1988f41fc695a8dd114a246d7303332733a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        
        $__internal_b43ec6143ab1c37f8726c8eb41ef1988f41fc695a8dd114a246d7303332733a4->leave($__internal_b43ec6143ab1c37f8726c8eb41ef1988f41fc695a8dd114a246d7303332733a4_prof);

    }

    public function getTemplateName()
    {
        return "EmploiBundle:Admin:creerClasse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 138,  82 => 8,  76 => 7,  68 => 5,  62 => 4,  50 => 3,  38 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}
{% block title %}Gestion Classes{% endblock %}
{% block page_title %}Gestion Classes{% endblock %}
{% block avanzu_sidebar %}
    {% include 'EmploiBundle:Admin:sidebarAdmin.html.twig' %}
{% endblock %}
{% block page_content %}
    <!-- Bloc Tab classes -->
    <div class=\"nav-tabs-custom\">
        <ul class=\"nav nav-tabs\">
            <li class=\"\"><a href=\"#tab_1\" data-toggle=\"tab\" aria-expanded=\"true\">Ajouter une classe</a></li>
            <li class=\"active\"><a href=\"#tab_2\" data-toggle=\"tab\" aria-expanded=\"true\">Afficher les classes</a></li>
            <!--<li class=\"\"><a href=\"#tab_3\" data-toggle=\"tab\" aria-expanded=\"false\">Tab 3</a></li>
            <li class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\">
                    Dropdown <span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Action</a></li>
                    <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Another action</a></li>
                    <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Something else here</a></li>
                    <li role=\"presentation\" class=\"divider\"></li>
                    <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Separated link</a></li>
                </ul>
            </li>
            <li class=\"pull-right\"><a href=\"#\" class=\"text-muted\"><i class=\"fa fa-gear\"></i></a></li>-->
        </ul>
        <div class=\"tab-content\">
            <div class=\"tab-pane\" id=\"tab_1\">
                <div style=\"    width: 50%;    margin-left: 25%;    align: center;\">
                    <div class=\"form-group\">
                        <label for=\"exampleInputEmail1\">Classe</label>
                        <input type=\"email\" class=\"form-control\"  placeholder=\"Ex. 1 CP 2 \">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputEmail1\">Description</label>
                        <input type=\"email\" class=\"form-control\"  placeholder=\"Ex. 1 Classe Primaire 2\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Creer classe</button> <button type=\"reset\" class=\"btn btn-default\">Cancel</button>
                </div>
            </div>
            <!-- /.tab-pane -->
            <div class=\"tab-pane active\" id=\"tab_2\">

                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Liste des classes</h3>

                        <div class=\"box-tools\">
                            <div class=\"input-group input-group-sm\" style=\"width: 150px;\">
                                <input type=\"text\" name=\"table_search\" class=\"form-control pull-right\" placeholder=\"Search\">

                                <div class=\"input-group-btn\">
                                    <button type=\"submit\" class=\"btn btn-default\"><i class=\"fa fa-search\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class=\"box-body table-responsive no-padding\">
                        <table class=\"table table-hover\">
                            <tbody><tr>
                                <th>ID</th>
                                <th>Classe</th>
                                <th>Description</th>
                                <th>Statut</th>
                                <th>Action</th>

                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1 CP 1</td>
                                <td>1 Classe Primaire 1</td>
                                <td>
                                    <div class=\"progress progress-xs\">
                                        <div class=\"progress-bar progress-bar-yellow\" style=\"width: 70%\"></div>
                                    </div>
                                </td>
                                <td><span class=\"label label-primary\">Modifier</span> <span class=\"label label-danger\">Supprimer</span></td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td>1 CP 2</td>
                                <td>1 Classe Primaire 2</td>
                                <td>
                                    <div class=\"progress progress-xs\">
                                        <div class=\"progress-bar progress-bar-yellow\" style=\"width: 40%\"></div>
                                    </div>
                                </td>
                                <td><span class=\"label label-primary\">Modifier</span> <span class=\"label label-danger\">Supprimer</span></td>

                            </tr>
                            <tr>
                                <td>3</td>
                                <td>2 CP 1</td>
                                <td>2 Classe Primaire 1</td>
                                <td>
                                    <div class=\"progress progress-xs\">
                                        <div class=\"progress-bar progress-bar-yellow\" style=\"width: 90%\"></div>
                                    </div>
                                </td>
                                <td><span class=\"label label-primary\">Modifier</span> <span class=\"label label-danger\">Supprimer</span></td>

                            </tr>
                            <tr>
                                <td>4</td>
                                <td>3 CP 1</td>
                                <td>3 Classe Primaire 1</td>
                                <td>
                                    <div class=\"progress progress-xs progress-striped active\">
                                        <div class=\"progress-bar progress-bar-success\" style=\"width: 100%\"></div>
                                    </div>
                                </td>
                                <td><span class=\"label label-primary\">Modifier</span> <span class=\"label label-danger\">Supprimer</span></td>

                            </tr>
                            </tbody></table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <!-- /.tab-pane -->
           <!-- <div class=\"tab-pane\" id=\"tab_3\">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
            <!-- /.tab-pane -->
        </div>
    </div>
    <!-- Fin Bloc Tab classes -->
{% endblock %}
{% block avanzu_admin_footer %}{% endblock %}
", "EmploiBundle:Admin:creerClasse.html.twig", "C:\\wamp\\www\\emploi2\\src\\Emploi\\EmploiBundle/Resources/views/Admin/creerClasse.html.twig");
    }
}
