<?php

/* EmploiBundle:Admin:gestionEnseignant.html.twig */
class __TwigTemplate_0abb16b417b0e0b86debecb1e4df86dc517eb9f2419328897e0eeed174291f89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "EmploiBundle:Admin:gestionEnseignant.html.twig", 1);
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
        $__internal_0bf43f3e3f4647e94127626c1fa30913beb1931d156e8521436f442c1e326398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bf43f3e3f4647e94127626c1fa30913beb1931d156e8521436f442c1e326398->enter($__internal_0bf43f3e3f4647e94127626c1fa30913beb1931d156e8521436f442c1e326398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmploiBundle:Admin:gestionEnseignant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bf43f3e3f4647e94127626c1fa30913beb1931d156e8521436f442c1e326398->leave($__internal_0bf43f3e3f4647e94127626c1fa30913beb1931d156e8521436f442c1e326398_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea5e19b78dbd996502389add32b5ec52e024af3e649178e2fadb99b140cefaed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea5e19b78dbd996502389add32b5ec52e024af3e649178e2fadb99b140cefaed->enter($__internal_ea5e19b78dbd996502389add32b5ec52e024af3e649178e2fadb99b140cefaed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion Enseignant";
        
        $__internal_ea5e19b78dbd996502389add32b5ec52e024af3e649178e2fadb99b140cefaed->leave($__internal_ea5e19b78dbd996502389add32b5ec52e024af3e649178e2fadb99b140cefaed_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_9bbbfa124597066677e1b6f8a3f176ff74b77740008cac3e96b491ec010b77ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bbbfa124597066677e1b6f8a3f176ff74b77740008cac3e96b491ec010b77ab->enter($__internal_9bbbfa124597066677e1b6f8a3f176ff74b77740008cac3e96b491ec010b77ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Gestion Enseignant";
        
        $__internal_9bbbfa124597066677e1b6f8a3f176ff74b77740008cac3e96b491ec010b77ab->leave($__internal_9bbbfa124597066677e1b6f8a3f176ff74b77740008cac3e96b491ec010b77ab_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_4ab9bf0ee60f4581f5a80465493a880d99ef7ba9be60c3bc3248dd0a36489af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab9bf0ee60f4581f5a80465493a880d99ef7ba9be60c3bc3248dd0a36489af1->enter($__internal_4ab9bf0ee60f4581f5a80465493a880d99ef7ba9be60c3bc3248dd0a36489af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        
        $__internal_4ab9bf0ee60f4581f5a80465493a880d99ef7ba9be60c3bc3248dd0a36489af1->leave($__internal_4ab9bf0ee60f4581f5a80465493a880d99ef7ba9be60c3bc3248dd0a36489af1_prof);

    }

    // line 5
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_4d0f94fd3ad25c78296ccea104545b245f78e92e29bce9d18359bf97a98e3eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0f94fd3ad25c78296ccea104545b245f78e92e29bce9d18359bf97a98e3eb1->enter($__internal_4d0f94fd3ad25c78296ccea104545b245f78e92e29bce9d18359bf97a98e3eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        // line 6
        echo "    ";
        $this->loadTemplate("EmploiBundle:Admin:sidebarAdmin.html.twig", "EmploiBundle:Admin:gestionEnseignant.html.twig", 6)->display($context);
        
        $__internal_4d0f94fd3ad25c78296ccea104545b245f78e92e29bce9d18359bf97a98e3eb1->leave($__internal_4d0f94fd3ad25c78296ccea104545b245f78e92e29bce9d18359bf97a98e3eb1_prof);

    }

    // line 8
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ff0836941d56d93cee6fac2a4d1499f850e6a40d165bd70bbd9a8567a7960862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff0836941d56d93cee6fac2a4d1499f850e6a40d165bd70bbd9a8567a7960862->enter($__internal_ff0836941d56d93cee6fac2a4d1499f850e6a40d165bd70bbd9a8567a7960862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 9
        echo "    <div class=\"form-group col-xs-3\">
        <label>Choisir une Classe</label>
        <select class=\"form-control\">
            <option>Liste classe</option>
            <option>option B</option>
            <option>option C</option>
            <option>option 4</option>
            <option>option 5</option>
        </select>
    </div>
    <div class=\"form-group col-xs-3\">
        <label>Choisir une matiere</label>
        <select class=\"form-control\">
            <option>Liste matiere</option>
            <option>option 2</option>
            <option>option 3</option>
            <option>option 4</option>
            <option>option 5</option>
        </select>
    </div>
    <div class=\"form-group col-xs-3\">
        <label>Choisir Enseignant</label>
        <select class=\"form-control\">
            <option>Liste Enseignant</option>
            <option>option b</option>
            <option>option c</option>
            <option>option 4</option>
            <option>option 5</option>
        </select>
    </div>
    <button type=\"submit\" class=\"btn btn-primary\" style=\"    margin-top: 25px;\">ok</button><br/><br/>
    <table id=\"example2\" class=\"table table-bordered table-hover dataTable\" role=\"grid\" aria-describedby=\"example2_info\" style=\"    background-color: white;\">
        <thead>
        <tr role=\"row\">
            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\" aria-label=\"Rendering engine: activate to sort column descending\" aria-sort=\"ascending\">Classe</th>
            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\" aria-label=\"Browser: activate to sort column ascending\">Matiere</th>
            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\" aria-label=\"Platform(s): activate to sort column ascending\">Enseignant</th>
            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\" aria-label=\"Engine version: activate to sort column ascending\">Action</th>

        </thead>
        <tbody>
        <tr role=\"row\" class=\"odd\">
            <td class=\"sorting_1\">1 CP 1</td>
            <td>Math</td>
            <td>Foulen Fouleni</td>
            <td><span class=\"label label-primary\">Modifier</span> <span class=\"label label-danger\">Supprimer</span></td>

        </tr><tr role=\"row\" class=\"even\">
            <td class=\"sorting_1\">1 CP 2</td>
            <td>Anglais</td>
            <td>John Doe</td>
            <td><span class=\"label label-primary\">Modifier</span> <span class=\"label label-danger\">Supprimer</span></td>

        </tr><tr role=\"row\" class=\"odd\">
            <td class=\"sorting_1\">1 CP 1</td>
            <td>Math</td>
            <td>Foulen Fouleni</td>
            <td><span class=\"label label-primary\">Modifier</span> <span class=\"label label-danger\">Supprimer</span></td>

        </tr><tr role=\"row\" class=\"even\">
            <td class=\"sorting_1\">1 CP 2</td>
            <td>Anglais</td>
            <td>John Doe</td>
            <td><span class=\"label label-primary\">Modifier</span> <span class=\"label label-danger\">Supprimer</span></td>

        </tr></tbody>

    </table>
";
        
        $__internal_ff0836941d56d93cee6fac2a4d1499f850e6a40d165bd70bbd9a8567a7960862->leave($__internal_ff0836941d56d93cee6fac2a4d1499f850e6a40d165bd70bbd9a8567a7960862_prof);

    }

    // line 78
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_cbb123ade2257546380e4fa603c737fecc3175176319810ef5cca45f102cbf3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb123ade2257546380e4fa603c737fecc3175176319810ef5cca45f102cbf3b->enter($__internal_cbb123ade2257546380e4fa603c737fecc3175176319810ef5cca45f102cbf3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        
        $__internal_cbb123ade2257546380e4fa603c737fecc3175176319810ef5cca45f102cbf3b->leave($__internal_cbb123ade2257546380e4fa603c737fecc3175176319810ef5cca45f102cbf3b_prof);

    }

    public function getTemplateName()
    {
        return "EmploiBundle:Admin:gestionEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 78,  94 => 9,  88 => 8,  80 => 6,  74 => 5,  63 => 4,  51 => 3,  39 => 2,  11 => 1,);
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
{% block title %}Gestion Enseignant{% endblock %}
{% block page_title %}Gestion Enseignant{% endblock %}
{% block page_subtitle %}{% endblock %}
{% block avanzu_sidebar %}
    {% include 'EmploiBundle:Admin:sidebarAdmin.html.twig' %}
{% endblock %}
{% block page_content %}
    <div class=\"form-group col-xs-3\">
        <label>Choisir une Classe</label>
        <select class=\"form-control\">
            <option>Liste classe</option>
            <option>option B</option>
            <option>option C</option>
            <option>option 4</option>
            <option>option 5</option>
        </select>
    </div>
    <div class=\"form-group col-xs-3\">
        <label>Choisir une matiere</label>
        <select class=\"form-control\">
            <option>Liste matiere</option>
            <option>option 2</option>
            <option>option 3</option>
            <option>option 4</option>
            <option>option 5</option>
        </select>
    </div>
    <div class=\"form-group col-xs-3\">
        <label>Choisir Enseignant</label>
        <select class=\"form-control\">
            <option>Liste Enseignant</option>
            <option>option b</option>
            <option>option c</option>
            <option>option 4</option>
            <option>option 5</option>
        </select>
    </div>
    <button type=\"submit\" class=\"btn btn-primary\" style=\"    margin-top: 25px;\">ok</button><br/><br/>
    <table id=\"example2\" class=\"table table-bordered table-hover dataTable\" role=\"grid\" aria-describedby=\"example2_info\" style=\"    background-color: white;\">
        <thead>
        <tr role=\"row\">
            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\" aria-label=\"Rendering engine: activate to sort column descending\" aria-sort=\"ascending\">Classe</th>
            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\" aria-label=\"Browser: activate to sort column ascending\">Matiere</th>
            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\" aria-label=\"Platform(s): activate to sort column ascending\">Enseignant</th>
            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\" aria-label=\"Engine version: activate to sort column ascending\">Action</th>

        </thead>
        <tbody>
        <tr role=\"row\" class=\"odd\">
            <td class=\"sorting_1\">1 CP 1</td>
            <td>Math</td>
            <td>Foulen Fouleni</td>
            <td><span class=\"label label-primary\">Modifier</span> <span class=\"label label-danger\">Supprimer</span></td>

        </tr><tr role=\"row\" class=\"even\">
            <td class=\"sorting_1\">1 CP 2</td>
            <td>Anglais</td>
            <td>John Doe</td>
            <td><span class=\"label label-primary\">Modifier</span> <span class=\"label label-danger\">Supprimer</span></td>

        </tr><tr role=\"row\" class=\"odd\">
            <td class=\"sorting_1\">1 CP 1</td>
            <td>Math</td>
            <td>Foulen Fouleni</td>
            <td><span class=\"label label-primary\">Modifier</span> <span class=\"label label-danger\">Supprimer</span></td>

        </tr><tr role=\"row\" class=\"even\">
            <td class=\"sorting_1\">1 CP 2</td>
            <td>Anglais</td>
            <td>John Doe</td>
            <td><span class=\"label label-primary\">Modifier</span> <span class=\"label label-danger\">Supprimer</span></td>

        </tr></tbody>

    </table>
{% endblock %}
{% block avanzu_admin_footer %}{% endblock %}", "EmploiBundle:Admin:gestionEnseignant.html.twig", "C:\\wamp\\www\\emploi2\\src\\Emploi\\EmploiBundle/Resources/views/Admin/gestionEnseignant.html.twig");
    }
}
