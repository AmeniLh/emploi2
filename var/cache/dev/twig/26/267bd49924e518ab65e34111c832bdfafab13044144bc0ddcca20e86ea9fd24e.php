<?php

/* EmploiBundle:Admin:gestionEleve.html.twig */
class __TwigTemplate_0a82e729acc4064f4185aee28502f5c3666df1ae76076b2e2d861460ff288284 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "EmploiBundle:Admin:gestionEleve.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
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
        $__internal_2aa34af4effa9a7bdeb0e32f61e0a45d68b7e93eaa0204fd6fd6274c74923dda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa34af4effa9a7bdeb0e32f61e0a45d68b7e93eaa0204fd6fd6274c74923dda->enter($__internal_2aa34af4effa9a7bdeb0e32f61e0a45d68b7e93eaa0204fd6fd6274c74923dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmploiBundle:Admin:gestionEleve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2aa34af4effa9a7bdeb0e32f61e0a45d68b7e93eaa0204fd6fd6274c74923dda->leave($__internal_2aa34af4effa9a7bdeb0e32f61e0a45d68b7e93eaa0204fd6fd6274c74923dda_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9840634ff82f706c51f35ae60a4bfc424ada20d3ad44f0fc6d8dc9b6e19c41b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9840634ff82f706c51f35ae60a4bfc424ada20d3ad44f0fc6d8dc9b6e19c41b->enter($__internal_b9840634ff82f706c51f35ae60a4bfc424ada20d3ad44f0fc6d8dc9b6e19c41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion Eleve";
        
        $__internal_b9840634ff82f706c51f35ae60a4bfc424ada20d3ad44f0fc6d8dc9b6e19c41b->leave($__internal_b9840634ff82f706c51f35ae60a4bfc424ada20d3ad44f0fc6d8dc9b6e19c41b_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_74e915f58a290a3a2123b12ff2972303099058a79ef3a739532e8f289b81ad65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e915f58a290a3a2123b12ff2972303099058a79ef3a739532e8f289b81ad65->enter($__internal_74e915f58a290a3a2123b12ff2972303099058a79ef3a739532e8f289b81ad65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Gestion Eleve";
        
        $__internal_74e915f58a290a3a2123b12ff2972303099058a79ef3a739532e8f289b81ad65->leave($__internal_74e915f58a290a3a2123b12ff2972303099058a79ef3a739532e8f289b81ad65_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_97e9cb6277c7435bebd88bba60377ffaae3adc2b2d30e5a5fbb4311b0e760d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e9cb6277c7435bebd88bba60377ffaae3adc2b2d30e5a5fbb4311b0e760d49->enter($__internal_97e9cb6277c7435bebd88bba60377ffaae3adc2b2d30e5a5fbb4311b0e760d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        
        $__internal_97e9cb6277c7435bebd88bba60377ffaae3adc2b2d30e5a5fbb4311b0e760d49->leave($__internal_97e9cb6277c7435bebd88bba60377ffaae3adc2b2d30e5a5fbb4311b0e760d49_prof);

    }

    // line 5
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_18893065fe049818071680be00410f6d6727587697b5448f7071a7b678e1ece1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18893065fe049818071680be00410f6d6727587697b5448f7071a7b678e1ece1->enter($__internal_18893065fe049818071680be00410f6d6727587697b5448f7071a7b678e1ece1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        // line 6
        echo "    ";
        $this->loadTemplate("EmploiBundle:Admin:sidebarAdmin.html.twig", "EmploiBundle:Admin:gestionEleve.html.twig", 6)->display($context);
        
        $__internal_18893065fe049818071680be00410f6d6727587697b5448f7071a7b678e1ece1->leave($__internal_18893065fe049818071680be00410f6d6727587697b5448f7071a7b678e1ece1_prof);

    }

    // line 8
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_894a4028a687114c4006e6054cd23091ae61f77ffa5d390f3d22e0c822ae4d7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894a4028a687114c4006e6054cd23091ae61f77ffa5d390f3d22e0c822ae4d7d->enter($__internal_894a4028a687114c4006e6054cd23091ae61f77ffa5d390f3d22e0c822ae4d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 9
        echo "    <div class=\"nav-tabs-custom\">
        <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab_1\" data-toggle=\"tab\">Lister</a></li>
            <li><a href=\"#tab_2\" data-toggle=\"tab\">Ajouter</a></li>
            <!--<li><a href=\"#tab_3\" data-toggle=\"tab\">Tab 3</a></li>
            <li class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                    Dropdown <span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Action</a></li>
                    <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Another action</a></li>
                    <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Something else here</a></li>
                    <li role=\"presentation\" class=\"divider\"></li>
                    <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Separated link</a></li>
                </ul>
            </li>-->
            <li class=\"pull-right\"><a href=\"#\" class=\"text-muted\"><i class=\"fa fa-gear\"></i></a></li>
        </ul>
        <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab_1\">
                <div class=\"form-group\">
                    <label>Select</label>
                    <select class=\"form-control\">
                        <option>Tous les eleves</option>
                        <option>1 CP</option>
                        <option>2 CP</option>
                        <option>3 CP</option>
                        <option>4 CP</option>
                    </select>
                </div>
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Liste des eleves</h3>

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
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Statut</th>
                                <th>Classe</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>183</td>
                                <td>John </td>
                                <td>Doe</td>
                                <td><span class=\"label label-success\">Approved</span></td>
                                <td>1 CP 2</td>
                                <td><span class=\"label label-primary\">Modifier</span> <span class=\"label label-danger\">Supprimer</span></td>
                            </tr>
                            <tr>
                                <td>219</td>
                                <td>Alexander</td>
                                <td> Pierce</td>
                                <td><span class=\"label label-warning\">Pending</span></td>
                                <td>1 CP 2</td>
                                <td><span class=\"label label-primary\">Modifier</span> <span class=\"label label-danger\">Supprimer</span></td>
                            </tr>
                            <tr>
                                <td>657</td>
                                <td>Bob</td>
                                <td> Doe</td>
                                <td><span class=\"label label-success\">Approved</span></td>
                                <td>2 CP 1</td>
                                <td><span class=\"label label-primary\">Modifier</span> <span class=\"label label-danger\">Supprimer</span></td>
                            </tr>
                            <tr>
                                <td>175</td>
                                <td>Mike</td>
                                <td>Doe</td>
                                <td><span class=\"label label-danger\">Denied</span></td>
                                <td>2 CP 1</td>
                                <td><span class=\"label label-primary\">Modifier</span> <span class=\"label label-danger\">Supprimer</span></td>
                            </tr>
                            </tbody></table>
                    </div>
                    <!-- /.box-body -->
                </div>

            </div>
            <!-- /.tab-pane -->
            <div class=\"tab-pane\" id=\"tab_2\">
                The European languages are members of the same family. Their separate existence is a myth.
                For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                in their grammar, their pronunciation and their most common words. Everyone realizes why a
                new common language would be desirable: one could refuse to pay expensive translators. To
                achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                words. If several languages coalesce, the grammar of the resulting language is more simple
                and regular than that of the individual languages.
            </div>
            <!-- /.tab-pane -->
            <div class=\"tab-pane\" id=\"tab_3\">
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
        <!-- /.tab-content -->
    </div>
";
        
        $__internal_894a4028a687114c4006e6054cd23091ae61f77ffa5d390f3d22e0c822ae4d7d->leave($__internal_894a4028a687114c4006e6054cd23091ae61f77ffa5d390f3d22e0c822ae4d7d_prof);

    }

    // line 128
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_a3ec385440d0c83dd9edfe0feb25807020743de4cdf2f6cbdcfec0ed75026e02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ec385440d0c83dd9edfe0feb25807020743de4cdf2f6cbdcfec0ed75026e02->enter($__internal_a3ec385440d0c83dd9edfe0feb25807020743de4cdf2f6cbdcfec0ed75026e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        
        $__internal_a3ec385440d0c83dd9edfe0feb25807020743de4cdf2f6cbdcfec0ed75026e02->leave($__internal_a3ec385440d0c83dd9edfe0feb25807020743de4cdf2f6cbdcfec0ed75026e02_prof);

    }

    public function getTemplateName()
    {
        return "EmploiBundle:Admin:gestionEleve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 128,  94 => 9,  88 => 8,  80 => 6,  74 => 5,  63 => 4,  51 => 3,  39 => 2,  11 => 1,);
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
{% block title %}Gestion Eleve{% endblock %}
{% block page_title %}Gestion Eleve{% endblock %}
{% block page_subtitle %}{% endblock %}
{% block avanzu_sidebar %}
    {% include 'EmploiBundle:Admin:sidebarAdmin.html.twig' %}
{% endblock %}
{% block page_content %}
    <div class=\"nav-tabs-custom\">
        <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab_1\" data-toggle=\"tab\">Lister</a></li>
            <li><a href=\"#tab_2\" data-toggle=\"tab\">Ajouter</a></li>
            <!--<li><a href=\"#tab_3\" data-toggle=\"tab\">Tab 3</a></li>
            <li class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                    Dropdown <span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Action</a></li>
                    <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Another action</a></li>
                    <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Something else here</a></li>
                    <li role=\"presentation\" class=\"divider\"></li>
                    <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Separated link</a></li>
                </ul>
            </li>-->
            <li class=\"pull-right\"><a href=\"#\" class=\"text-muted\"><i class=\"fa fa-gear\"></i></a></li>
        </ul>
        <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab_1\">
                <div class=\"form-group\">
                    <label>Select</label>
                    <select class=\"form-control\">
                        <option>Tous les eleves</option>
                        <option>1 CP</option>
                        <option>2 CP</option>
                        <option>3 CP</option>
                        <option>4 CP</option>
                    </select>
                </div>
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Liste des eleves</h3>

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
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Statut</th>
                                <th>Classe</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>183</td>
                                <td>John </td>
                                <td>Doe</td>
                                <td><span class=\"label label-success\">Approved</span></td>
                                <td>1 CP 2</td>
                                <td><span class=\"label label-primary\">Modifier</span> <span class=\"label label-danger\">Supprimer</span></td>
                            </tr>
                            <tr>
                                <td>219</td>
                                <td>Alexander</td>
                                <td> Pierce</td>
                                <td><span class=\"label label-warning\">Pending</span></td>
                                <td>1 CP 2</td>
                                <td><span class=\"label label-primary\">Modifier</span> <span class=\"label label-danger\">Supprimer</span></td>
                            </tr>
                            <tr>
                                <td>657</td>
                                <td>Bob</td>
                                <td> Doe</td>
                                <td><span class=\"label label-success\">Approved</span></td>
                                <td>2 CP 1</td>
                                <td><span class=\"label label-primary\">Modifier</span> <span class=\"label label-danger\">Supprimer</span></td>
                            </tr>
                            <tr>
                                <td>175</td>
                                <td>Mike</td>
                                <td>Doe</td>
                                <td><span class=\"label label-danger\">Denied</span></td>
                                <td>2 CP 1</td>
                                <td><span class=\"label label-primary\">Modifier</span> <span class=\"label label-danger\">Supprimer</span></td>
                            </tr>
                            </tbody></table>
                    </div>
                    <!-- /.box-body -->
                </div>

            </div>
            <!-- /.tab-pane -->
            <div class=\"tab-pane\" id=\"tab_2\">
                The European languages are members of the same family. Their separate existence is a myth.
                For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                in their grammar, their pronunciation and their most common words. Everyone realizes why a
                new common language would be desirable: one could refuse to pay expensive translators. To
                achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                words. If several languages coalesce, the grammar of the resulting language is more simple
                and regular than that of the individual languages.
            </div>
            <!-- /.tab-pane -->
            <div class=\"tab-pane\" id=\"tab_3\">
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
        <!-- /.tab-content -->
    </div>
{% endblock %}
{% block avanzu_admin_footer %}{% endblock %}", "EmploiBundle:Admin:gestionEleve.html.twig", "C:\\wamp\\www\\emploi2\\src\\Emploi\\EmploiBundle/Resources/views/Admin/gestionEleve.html.twig");
    }
}
