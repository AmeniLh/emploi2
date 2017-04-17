<?php

/* EmploiBundle:Admin:indexAdmin.html.twig */
class __TwigTemplate_e2a67c086347015ec7b98df29dbbe67c3e36b07503a4b4010a00754f57570f1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "EmploiBundle:Admin:indexAdmin.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'avanzu_sidebar' => array($this, 'block_avanzu_sidebar'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d5ac26c8f4daf3c413d6ecb6348bfeaba9da69fc519d2ea0a2c95a4f8a4a016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d5ac26c8f4daf3c413d6ecb6348bfeaba9da69fc519d2ea0a2c95a4f8a4a016->enter($__internal_7d5ac26c8f4daf3c413d6ecb6348bfeaba9da69fc519d2ea0a2c95a4f8a4a016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmploiBundle:Admin:indexAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d5ac26c8f4daf3c413d6ecb6348bfeaba9da69fc519d2ea0a2c95a4f8a4a016->leave($__internal_7d5ac26c8f4daf3c413d6ecb6348bfeaba9da69fc519d2ea0a2c95a4f8a4a016_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_d48718ca5e1d5706258937d04cef47f7708b1d049ce8e3b4edaa3fa86c409a51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d48718ca5e1d5706258937d04cef47f7708b1d049ce8e3b4edaa3fa86c409a51->enter($__internal_d48718ca5e1d5706258937d04cef47f7708b1d049ce8e3b4edaa3fa86c409a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Dashboard";
        
        $__internal_d48718ca5e1d5706258937d04cef47f7708b1d049ce8e3b4edaa3fa86c409a51->leave($__internal_d48718ca5e1d5706258937d04cef47f7708b1d049ce8e3b4edaa3fa86c409a51_prof);

    }

    // line 3
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_6f6cc4568ffecb109288c7dc5e5ebb72744cddd6c70ffa3cd746964519c304eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f6cc4568ffecb109288c7dc5e5ebb72744cddd6c70ffa3cd746964519c304eb->enter($__internal_6f6cc4568ffecb109288c7dc5e5ebb72744cddd6c70ffa3cd746964519c304eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Admin";
        
        $__internal_6f6cc4568ffecb109288c7dc5e5ebb72744cddd6c70ffa3cd746964519c304eb->leave($__internal_6f6cc4568ffecb109288c7dc5e5ebb72744cddd6c70ffa3cd746964519c304eb_prof);

    }

    // line 4
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_a13716cac1aba30d183115b0ff7980444518ee4a08b743b09af9ad6ece381f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a13716cac1aba30d183115b0ff7980444518ee4a08b743b09af9ad6ece381f8b->enter($__internal_a13716cac1aba30d183115b0ff7980444518ee4a08b743b09af9ad6ece381f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        // line 5
        echo "    ";
        $this->loadTemplate("EmploiBundle:Admin:sidebarAdmin.html.twig", "EmploiBundle:Admin:indexAdmin.html.twig", 5)->display($context);
        
        $__internal_a13716cac1aba30d183115b0ff7980444518ee4a08b743b09af9ad6ece381f8b->leave($__internal_a13716cac1aba30d183115b0ff7980444518ee4a08b743b09af9ad6ece381f8b_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_4b09936ebf099cb5e474c1fc5d48e15be0c871fe9cbd10b0a60a6ee5ba57a0e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b09936ebf099cb5e474c1fc5d48e15be0c871fe9cbd10b0a60a6ee5ba57a0e9->enter($__internal_4b09936ebf099cb5e474c1fc5d48e15be0c871fe9cbd10b0a60a6ee5ba57a0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 8
        echo "    <!-- Contenu de la page -->

    <!-- Partie gauche de Contenu de la page -->
    <section class=\"col-lg-7 connectedSortable\">
        <!-- TO DO List -->
        <div class=\"box box-primary\">
            <div class=\"box-header\">
                <i class=\"ion ion-clipboard\"></i>

                <h3 class=\"box-title\">To Do List</h3>

                <div class=\"box-tools pull-right\">
                    <ul class=\"pagination pagination-sm inline\">
                        <li><a href=\"#\">&laquo;</a></li>
                        <li><a href=\"#\">1</a></li>
                        <li><a href=\"#\">2</a></li>
                        <li><a href=\"#\">3</a></li>
                        <li><a href=\"#\">&raquo;</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\">
                <ul class=\"todo-list\">
                    <li>
                        <!-- drag handle -->
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                        <!-- checkbox -->
                        <input type=\"checkbox\" value=\"\">
                        <!-- todo text -->
                        <span class=\"text\">Design a nice theme</span>
                        <!-- Emphasis label -->
                        <small class=\"label label-danger\"><i class=\"fa fa-clock-o\"></i> 2 mins</small>
                        <!-- General tools such as edit or delete-->
                        <div class=\"tools\">
                            <i class=\"fa fa-edit\"></i>
                            <i class=\"fa fa-trash-o\"></i>
                        </div>
                    </li>
                    <li>
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                        <input type=\"checkbox\" value=\"\">
                        <span class=\"text\">Make the theme responsive</span>
                        <small class=\"label label-info\"><i class=\"fa fa-clock-o\"></i> 4 hours</small>
                        <div class=\"tools\">
                            <i class=\"fa fa-edit\"></i>
                            <i class=\"fa fa-trash-o\"></i>
                        </div>
                    </li>
                    <li>
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                        <input type=\"checkbox\" value=\"\">
                        <span class=\"text\">Let theme shine like a star</span>
                        <small class=\"label label-warning\"><i class=\"fa fa-clock-o\"></i> 1 day</small>
                        <div class=\"tools\">
                            <i class=\"fa fa-edit\"></i>
                            <i class=\"fa fa-trash-o\"></i>
                        </div>
                    </li>
                    <li>
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                        <input type=\"checkbox\" value=\"\">
                        <span class=\"text\">Let theme shine like a star</span>
                        <small class=\"label label-success\"><i class=\"fa fa-clock-o\"></i> 3 days</small>
                        <div class=\"tools\">
                            <i class=\"fa fa-edit\"></i>
                            <i class=\"fa fa-trash-o\"></i>
                        </div>
                    </li>
                    <li>
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                        <input type=\"checkbox\" value=\"\">
                        <span class=\"text\">Check your messages and notifications</span>
                        <small class=\"label label-primary\"><i class=\"fa fa-clock-o\"></i> 1 week</small>
                        <div class=\"tools\">
                            <i class=\"fa fa-edit\"></i>
                            <i class=\"fa fa-trash-o\"></i>
                        </div>
                    </li>
                    <li>
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                        <input type=\"checkbox\" value=\"\">
                        <span class=\"text\">Let theme shine like a star</span>
                        <small class=\"label label-default\"><i class=\"fa fa-clock-o\"></i> 1 month</small>
                        <div class=\"tools\">
                            <i class=\"fa fa-edit\"></i>
                            <i class=\"fa fa-trash-o\"></i>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- /.box-body -->
            <div class=\"box-footer clearfix no-border\">
                <button type=\"button\" class=\"btn btn-default pull-right\"><i class=\"fa fa-plus\"></i> Add item</button>
            </div>
        </div>
        <!-- Fin TO DO List -->
    </section>
    <!-- Fin Partie gauche de Contenu de la page -->

    <!-- Partie droite de Contenu de la page -->
    <section class=\"col-lg-5 connectedSortable\">
        <!-- Calendar -->
        <div class=\"box box-solid bg-green-gradient\">
            <div class=\"box-header\">
                <i class=\"fa fa-calendar\"></i>

                <h3 class=\"box-title\">Calendar</h3>
                <!-- tools box -->
                <div class=\"pull-right box-tools\">
                    <!-- button with a dropdown -->
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-success btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-bars\"></i></button>
                        <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                            <li><a href=\"#\">Add new event</a></li>
                            <li><a href=\"#\">Clear events</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#\">View calendar</a></li>
                        </ul>
                    </div>
                    <button type=\"button\" class=\"btn btn-success btn-sm\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                    </button>
                    <button type=\"button\" class=\"btn btn-success btn-sm\" data-widget=\"remove\"><i class=\"fa fa-times\"></i>
                    </button>
                </div>
                <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class=\"box-body no-padding\">
                <!--The calendar -->
                <div id=\"calendar\" style=\"width: 100%\"></div>
            </div>
            <!-- /.box-body -->
            <div class=\"box-footer text-black\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <!-- Progress bars -->
                        <div class=\"clearfix\">
                            <span class=\"pull-left\">Task #1</span>
                            <small class=\"pull-right\">90%</small>
                        </div>
                        <div class=\"progress xs\">
                            <div class=\"progress-bar progress-bar-green\" style=\"width: 90%;\"></div>
                        </div>

                        <div class=\"clearfix\">
                            <span class=\"pull-left\">Task #2</span>
                            <small class=\"pull-right\">70%</small>
                        </div>
                        <div class=\"progress xs\">
                            <div class=\"progress-bar progress-bar-green\" style=\"width: 70%;\"></div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class=\"col-sm-6\">
                        <div class=\"clearfix\">
                            <span class=\"pull-left\">Task #3</span>
                            <small class=\"pull-right\">60%</small>
                        </div>
                        <div class=\"progress xs\">
                            <div class=\"progress-bar progress-bar-green\" style=\"width: 60%;\"></div>
                        </div>

                        <div class=\"clearfix\">
                            <span class=\"pull-left\">Task #4</span>
                            <small class=\"pull-right\">40%</small>
                        </div>
                        <div class=\"progress xs\">
                            <div class=\"progress-bar progress-bar-green\" style=\"width: 40%;\"></div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- Fin Calendar -->
    </section>
    <!-- Fin Partie droite de Contenu de la page -->
    <!-- Fin Contenu de la page -->
";
        
        $__internal_4b09936ebf099cb5e474c1fc5d48e15be0c871fe9cbd10b0a60a6ee5ba57a0e9->leave($__internal_4b09936ebf099cb5e474c1fc5d48e15be0c871fe9cbd10b0a60a6ee5ba57a0e9_prof);

    }

    public function getTemplateName()
    {
        return "EmploiBundle:Admin:indexAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 8,  75 => 7,  67 => 5,  61 => 4,  49 => 3,  37 => 2,  11 => 1,);
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
{% block page_title %}Dashboard{% endblock %}
{% block page_subtitle %}Admin{% endblock %}
{% block avanzu_sidebar %}
    {% include 'EmploiBundle:Admin:sidebarAdmin.html.twig' %}
{% endblock %}
{% block page_content %}
    <!-- Contenu de la page -->

    <!-- Partie gauche de Contenu de la page -->
    <section class=\"col-lg-7 connectedSortable\">
        <!-- TO DO List -->
        <div class=\"box box-primary\">
            <div class=\"box-header\">
                <i class=\"ion ion-clipboard\"></i>

                <h3 class=\"box-title\">To Do List</h3>

                <div class=\"box-tools pull-right\">
                    <ul class=\"pagination pagination-sm inline\">
                        <li><a href=\"#\">&laquo;</a></li>
                        <li><a href=\"#\">1</a></li>
                        <li><a href=\"#\">2</a></li>
                        <li><a href=\"#\">3</a></li>
                        <li><a href=\"#\">&raquo;</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\">
                <ul class=\"todo-list\">
                    <li>
                        <!-- drag handle -->
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                        <!-- checkbox -->
                        <input type=\"checkbox\" value=\"\">
                        <!-- todo text -->
                        <span class=\"text\">Design a nice theme</span>
                        <!-- Emphasis label -->
                        <small class=\"label label-danger\"><i class=\"fa fa-clock-o\"></i> 2 mins</small>
                        <!-- General tools such as edit or delete-->
                        <div class=\"tools\">
                            <i class=\"fa fa-edit\"></i>
                            <i class=\"fa fa-trash-o\"></i>
                        </div>
                    </li>
                    <li>
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                        <input type=\"checkbox\" value=\"\">
                        <span class=\"text\">Make the theme responsive</span>
                        <small class=\"label label-info\"><i class=\"fa fa-clock-o\"></i> 4 hours</small>
                        <div class=\"tools\">
                            <i class=\"fa fa-edit\"></i>
                            <i class=\"fa fa-trash-o\"></i>
                        </div>
                    </li>
                    <li>
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                        <input type=\"checkbox\" value=\"\">
                        <span class=\"text\">Let theme shine like a star</span>
                        <small class=\"label label-warning\"><i class=\"fa fa-clock-o\"></i> 1 day</small>
                        <div class=\"tools\">
                            <i class=\"fa fa-edit\"></i>
                            <i class=\"fa fa-trash-o\"></i>
                        </div>
                    </li>
                    <li>
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                        <input type=\"checkbox\" value=\"\">
                        <span class=\"text\">Let theme shine like a star</span>
                        <small class=\"label label-success\"><i class=\"fa fa-clock-o\"></i> 3 days</small>
                        <div class=\"tools\">
                            <i class=\"fa fa-edit\"></i>
                            <i class=\"fa fa-trash-o\"></i>
                        </div>
                    </li>
                    <li>
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                        <input type=\"checkbox\" value=\"\">
                        <span class=\"text\">Check your messages and notifications</span>
                        <small class=\"label label-primary\"><i class=\"fa fa-clock-o\"></i> 1 week</small>
                        <div class=\"tools\">
                            <i class=\"fa fa-edit\"></i>
                            <i class=\"fa fa-trash-o\"></i>
                        </div>
                    </li>
                    <li>
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                        <input type=\"checkbox\" value=\"\">
                        <span class=\"text\">Let theme shine like a star</span>
                        <small class=\"label label-default\"><i class=\"fa fa-clock-o\"></i> 1 month</small>
                        <div class=\"tools\">
                            <i class=\"fa fa-edit\"></i>
                            <i class=\"fa fa-trash-o\"></i>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- /.box-body -->
            <div class=\"box-footer clearfix no-border\">
                <button type=\"button\" class=\"btn btn-default pull-right\"><i class=\"fa fa-plus\"></i> Add item</button>
            </div>
        </div>
        <!-- Fin TO DO List -->
    </section>
    <!-- Fin Partie gauche de Contenu de la page -->

    <!-- Partie droite de Contenu de la page -->
    <section class=\"col-lg-5 connectedSortable\">
        <!-- Calendar -->
        <div class=\"box box-solid bg-green-gradient\">
            <div class=\"box-header\">
                <i class=\"fa fa-calendar\"></i>

                <h3 class=\"box-title\">Calendar</h3>
                <!-- tools box -->
                <div class=\"pull-right box-tools\">
                    <!-- button with a dropdown -->
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-success btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-bars\"></i></button>
                        <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                            <li><a href=\"#\">Add new event</a></li>
                            <li><a href=\"#\">Clear events</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#\">View calendar</a></li>
                        </ul>
                    </div>
                    <button type=\"button\" class=\"btn btn-success btn-sm\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                    </button>
                    <button type=\"button\" class=\"btn btn-success btn-sm\" data-widget=\"remove\"><i class=\"fa fa-times\"></i>
                    </button>
                </div>
                <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class=\"box-body no-padding\">
                <!--The calendar -->
                <div id=\"calendar\" style=\"width: 100%\"></div>
            </div>
            <!-- /.box-body -->
            <div class=\"box-footer text-black\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <!-- Progress bars -->
                        <div class=\"clearfix\">
                            <span class=\"pull-left\">Task #1</span>
                            <small class=\"pull-right\">90%</small>
                        </div>
                        <div class=\"progress xs\">
                            <div class=\"progress-bar progress-bar-green\" style=\"width: 90%;\"></div>
                        </div>

                        <div class=\"clearfix\">
                            <span class=\"pull-left\">Task #2</span>
                            <small class=\"pull-right\">70%</small>
                        </div>
                        <div class=\"progress xs\">
                            <div class=\"progress-bar progress-bar-green\" style=\"width: 70%;\"></div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class=\"col-sm-6\">
                        <div class=\"clearfix\">
                            <span class=\"pull-left\">Task #3</span>
                            <small class=\"pull-right\">60%</small>
                        </div>
                        <div class=\"progress xs\">
                            <div class=\"progress-bar progress-bar-green\" style=\"width: 60%;\"></div>
                        </div>

                        <div class=\"clearfix\">
                            <span class=\"pull-left\">Task #4</span>
                            <small class=\"pull-right\">40%</small>
                        </div>
                        <div class=\"progress xs\">
                            <div class=\"progress-bar progress-bar-green\" style=\"width: 40%;\"></div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- Fin Calendar -->
    </section>
    <!-- Fin Partie droite de Contenu de la page -->
    <!-- Fin Contenu de la page -->
{% endblock %}
", "EmploiBundle:Admin:indexAdmin.html.twig", "C:\\wamp\\www\\emploi2\\src\\Emploi\\EmploiBundle/Resources/views/Admin/indexAdmin.html.twig");
    }
}
