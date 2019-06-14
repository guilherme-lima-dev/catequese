<?php

/* base.html.twig */
class __TwigTemplate_8fb8f636706efefa08f6f4d8a971745abeaedf9269df73d3fd2ce0d758fc6cc6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Custom fonts for this template-->
    <link href=\"/admin/vendor/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"/admin/css/sb-admin-2.min.css\" rel=\"stylesheet\">

</head>

<body id=\"page-top\">

<!-- Page Wrapper -->
<div id=\"wrapper\">

    <!-- Sidebar -->
    <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

        <!-- Sidebar - Brand -->
        <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"#\">
            <div class=\"sidebar-brand-icon\">
                <i class=\"fas fa-church\"></i>
            </div>
            <div class=\"sidebar-brand-text mx-3\">Catequese<sup></sup></div>
        </a>

        <!-- Divider -->
        <hr class=\"sidebar-divider my-0\">

        <!-- Nav Item - Dashboard -->
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catequizando_index");
        echo "\">
                <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                <span>Inicio</span></a>
        </li>

        <!-- Divider -->
        <hr class=\"sidebar-divider\">

        <!-- Heading -->
        <div class=\"sidebar-heading\">
            Administrador
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#catequizandos\" aria-expanded=\"true\" aria-controls=\"collapsePages\">
                <i class=\"fas fa-fw fa-folder\"></i>
                <span>Catequizandos</span>
            </a>
            <div id=\"catequizandos\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <h6 class=\"collapse-header\">Catequizando:</h6>
                    <a class=\"collapse-item\" href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catequizando_new");
        echo "\">Cadastrar</a>
                    <a class=\"collapse-item\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catequizando_index");
        echo "\">Listar</a>
                </div>
            </div>
        </li>
        ";
        // line 71
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COORDENADOR")) {
            // line 72
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#catequistas\" aria-expanded=\"true\" aria-controls=\"collapsePages\">
                    <i class=\"fas fa-fw fa-folder\"></i>
                    <span>Catequistas</span>
                </a>
                <div id=\"catequistas\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
                    <div class=\"bg-white py-2 collapse-inner rounded\">
                        <h6 class=\"collapse-header\">Catequista:</h6>
                        ";
            // line 80
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 81
                echo "                            <a class=\"collapse-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catequista_new");
                echo "\">Cadastrar</a>
                        ";
            }
            // line 83
            echo "                        <a class=\"collapse-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catequista_index");
            echo "\">Listar</a>
                    </div>
                </div>
            </li>
        ";
        }
        // line 88
        echo "        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#turmas\" aria-expanded=\"true\" aria-controls=\"collapsePages\">
                <i class=\"fas fa-fw fa-folder\"></i>
                <span>Turmas</span>
            </a>
            <div id=\"turmas\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <h6 class=\"collapse-header\">Turma:</h6>
                    ";
        // line 96
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COORDENADOR")) {
            // line 97
            echo "                        <a class=\"collapse-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("turma_new");
            echo "\">Cadastrar</a>
                    ";
        }
        // line 99
        echo "                    <a class=\"collapse-item\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("turma_index");
        echo "\">Listar</a>
                </div>
            </div>
        </li>

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#escolas\" aria-expanded=\"true\" aria-controls=\"collapsePages\">
                <i class=\"fas fa-fw fa-folder\"></i>
                <span>Escolas</span>
            </a>
            <div id=\"escolas\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <h6 class=\"collapse-header\">Escola:</h6>
                    ";
        // line 112
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COORDENADOR")) {
            // line 113
            echo "                        <a class=\"collapse-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("escola_new");
            echo "\">Cadastrar</a>
                    ";
        }
        // line 115
        echo "                    <a class=\"collapse-item\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("escola_index");
        echo "\">Listar</a>
                </div>
            </div>
        </li>

        ";
        // line 121
        echo "        ";
        // line 122
        echo "            ";
        // line 123
        echo "                ";
        // line 124
        echo "                ";
        // line 125
        echo "        ";
        // line 126
        echo "        ";
        // line 127
        echo "
        <!-- Divider -->
        <hr class=\"sidebar-divider d-none d-md-block\">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class=\"text-center d-none d-md-inline\">
            <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id=\"content-wrapper\" class=\"d-flex flex-column\">

        <!-- Main Content -->
        <div id=\"content\">

            <!-- Topbar -->
            <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

                <!-- Sidebar Toggle (Topbar) -->
                <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                    <i class=\"fa fa-bars\"></i>
                </button>


                <!-- Topbar Navbar -->
                <ul class=\"navbar-nav ml-auto\">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class=\"nav-item dropdown no-arrow d-sm-none\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-search fa-fw\"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\" aria-labelledby=\"searchDropdown\">
                            <form class=\"form-inline mr-auto w-100 navbar-search\">
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Pesquise...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                                    <div class=\"input-group-append\">
                                        <button class=\"btn btn-primary\" type=\"button\">
                                            <i class=\"fas fa-search fa-sm\"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>



                    <div class=\"topbar-divider d-none d-sm-block\"></div>

                    <!-- Nav Item - User Information -->
                    <li class=\"nav-item dropdown no-arrow\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">";
        // line 184
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 184, $this->source); })()), "user", []), "nome", []), "html", null, true);
        echo "</span>
                            <img class=\"img-profile rounded-circle\" src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRa8zKF8xe85wmOD7fiqsVHiTLsRBG3_CHZrIXO3Y1QFyZTFTlV_w\">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"userDropdown\">
                            <a class=\"dropdown-item\" href=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catequista_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 189, $this->source); })()), "user", []), "id", [])]), "html", null, true);
        echo "\">
                                <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Perfil
                            </a>

                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                                <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Sair
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class=\"container-fluid\">

                ";
        // line 210
        $this->displayBlock('body', $context, $blocks);
        // line 212
        echo "            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class=\"sticky-footer bg-white\">
            <div class=\"container my-auto\">
                <div class=\"copyright text-center my-auto\">
                    <span>Copyright &copy; Catequese 2019</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class=\"scroll-to-top rounded\" href=\"#page-top\">
    <i class=\"fas fa-angle-up\"></i>
</a>

<!-- Logout Modal-->
<div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Pronto para sair?</h5>
                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">Aperte \"Sair\" para terminar sua sessão atual.</div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancelar</button>
                <a class=\"btn btn-primary\" href=\"";
        // line 252
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Sair</a>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript-->
<script src=\"/admin/vendor/jquery/jquery.min.js\"></script>
<script src=\"/admin/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

<!-- Core plugin JavaScript-->
<script src=\"/admin/vendor/jquery-easing/jquery.easing.min.js\"></script>

<!-- Custom scripts for all pages-->
<script src=\"/admin/js/sb-admin-2.min.js\"></script>

<!-- Page level plugins -->
<script src=\"/admin/vendor/datatables/jquery.dataTables.min.js\"></script>
<script src=\"/admin/vendor/datatables/dataTables.bootstrap4.min.js\"></script>

<!-- Page level custom scripts -->
<script src=\"/admin/js/demo/datatables-demo.js\"></script>

<script>

    \$(document).ready(function() {
        \$('#tabela').DataTable( {
            \"language\": {
                \"lengthMenu\": \"Mostrar _MENU_ exibições por página\",
                \"zeroRecords\": \"Não foi encontrado nenhum resultado\",
                \"info\": \"Mostrando página _PAGE_ de _PAGES_\",
                \"infoEmpty\": \"Não há nada para exibir\",
                \"infoFiltered\": \"(filtrando de _MAX_ exibições)\",
                \"search\": \"Pesquisa\",
                \"paginate\": {
                    \"previous\": \"Voltar\",
                    \"next\": \"Avançar\"
                }
            }
        }
        );
        // \$(\"#catequizando_comprovanteBatizado\").removeClass('custom-file-input');
        // \$(\"div:has(>#catequizando_comprovanteBatizado)\").removeClass('custom-file');
        \$(\"#catequizando_comprovanteBatizado\").change(function(){
            var fileName = \$(this).val();
            fileName = fileName.split(\"\\\\\");
            \$(this).next('.custom-file-label').html(fileName[2]);
        });
        \$(\"#catequizando_comprovanteCasamento\").change(function(){
            var fileName = \$(this).val();
            fileName = fileName.split(\"\\\\\");
            \$(this).next('.custom-file-label').html(fileName[2]);
        });
        \$(\"#catequizando_comprovanteEucaristia\").change(function(){
            var fileName = \$(this).val();
            fileName = fileName.split(\"\\\\\");
            \$(this).next('.custom-file-label').html(fileName[2]);
        });
        \$(\"#catequizando_documento\").change(function(){
            var fileName = \$(this).val();
            fileName = fileName.split(\"\\\\\");
            \$(this).next('.custom-file-label').html(fileName[2]);
        });

        \$(\"#catequizando_nomePadrinhoCrisma\").css('display', 'none');
        \$(\"label[for='catequizando_nomePadrinhoCrisma']\").css('display', 'none');
        \$(\"#catequizando_telPadrinho\").css('display', 'none');
        \$(\"label[for='catequizando_telPadrinho']\").css('display', 'none');
        \$(\"#catequizando_enderecoPadrinho\").css('display', 'none');
        \$(\"label[for='catequizando_enderecoPadrinho']\").css('display', 'none');
        \$(\"#catequizando_cidadePadrinho\").css('display', 'none');
        \$(\"label[for='catequizando_cidadePadrinho']\").css('display', 'none');
        var etapa = \$(\"#catequizando_turma option:selected\").text().split(\" \");

        if(etapa[0] === 'Crisma' || etapa[0] === 'crisma'){
            \$(\"#catequizando_nomePadrinhoCrisma\").css('display', 'block');
            \$(\"label[for='catequizando_nomePadrinhoCrisma']\").css('display', 'block');
            \$(\"#catequizando_telPadrinho\").css('display', 'block');
            \$(\"label[for='catequizando_telPadrinho']\").css('display', 'block');
            \$(\"#catequizando_enderecoPadrinho\").css('display', 'block');
            \$(\"label[for='catequizando_enderecoPadrinho']\").css('display', 'block');
            \$(\"#catequizando_cidadePadrinho\").css('display', 'block');
            \$(\"label[for='catequizando_cidadePadrinho']\").css('display', 'block');
        }else{
            \$(\"#catequizando_nomePadrinhoCrisma\").css('display', 'none');
            \$(\"label[for='catequizando_nomePadrinhoCrisma']\").css('display', 'none');
            \$(\"#catequizando_telPadrinho\").css('display', 'none');
            \$(\"label[for='catequizando_telPadrinho']\").css('display', 'none');
            \$(\"#catequizando_enderecoPadrinho\").css('display', 'none');
            \$(\"label[for='catequizando_enderecoPadrinho']\").css('display', 'none');
            \$(\"#catequizando_cidadePadrinho\").css('display', 'none');
            \$(\"label[for='catequizando_cidadePadrinho']\").css('display', 'none');
        }
        \$(\"#catequizando_turma\").change(function(){

            var etapa = \$(\"#catequizando_turma option:selected\").text().split(\" \");

            if(etapa[0] === 'Crisma' || etapa[0] === 'crisma'){
                \$(\"#catequizando_nomePadrinhoCrisma\").css('display', 'block');
                \$(\"label[for='catequizando_nomePadrinhoCrisma']\").css('display', 'block');
                \$(\"#catequizando_telPadrinho\").css('display', 'block');
                \$(\"label[for='catequizando_telPadrinho']\").css('display', 'block');
                \$(\"#catequizando_enderecoPadrinho\").css('display', 'block');
                \$(\"label[for='catequizando_enderecoPadrinho']\").css('display', 'block');
                \$(\"#catequizando_cidadePadrinho\").css('display', 'block');
                \$(\"label[for='catequizando_cidadePadrinho']\").css('display', 'block');
            }else{
                \$(\"#catequizando_nomePadrinhoCrisma\").css('display', 'none');
                \$(\"label[for='catequizando_nomePadrinhoCrisma']\").css('display', 'none');
                \$(\"#catequizando_telPadrinho\").css('display', 'none');
                \$(\"label[for='catequizando_telPadrinho']\").css('display', 'none');
                \$(\"#catequizando_enderecoPadrinho\").css('display', 'none');
                \$(\"label[for='catequizando_enderecoPadrinho']\").css('display', 'none');
                \$(\"#catequizando_cidadePadrinho\").css('display', 'none');
                \$(\"label[for='catequizando_cidadePadrinho']\").css('display', 'none');
            }
        });
    } );

</script>

</body>

</html>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Catequese";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 210
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 211
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  493 => 211,  487 => 210,  475 => 12,  340 => 252,  298 => 212,  296 => 210,  272 => 189,  264 => 184,  205 => 127,  203 => 126,  201 => 125,  199 => 124,  197 => 123,  195 => 122,  193 => 121,  184 => 115,  178 => 113,  176 => 112,  159 => 99,  153 => 97,  151 => 96,  141 => 88,  132 => 83,  126 => 81,  124 => 80,  114 => 72,  112 => 71,  105 => 67,  101 => 66,  76 => 44,  41 => 12,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>{% block title %}Catequese{% endblock %}</title>

    <!-- Custom fonts for this template-->
    <link href=\"/admin/vendor/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"/admin/css/sb-admin-2.min.css\" rel=\"stylesheet\">

</head>

<body id=\"page-top\">

<!-- Page Wrapper -->
<div id=\"wrapper\">

    <!-- Sidebar -->
    <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

        <!-- Sidebar - Brand -->
        <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"#\">
            <div class=\"sidebar-brand-icon\">
                <i class=\"fas fa-church\"></i>
            </div>
            <div class=\"sidebar-brand-text mx-3\">Catequese<sup></sup></div>
        </a>

        <!-- Divider -->
        <hr class=\"sidebar-divider my-0\">

        <!-- Nav Item - Dashboard -->
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"{{ path('catequizando_index') }}\">
                <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                <span>Inicio</span></a>
        </li>

        <!-- Divider -->
        <hr class=\"sidebar-divider\">

        <!-- Heading -->
        <div class=\"sidebar-heading\">
            Administrador
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#catequizandos\" aria-expanded=\"true\" aria-controls=\"collapsePages\">
                <i class=\"fas fa-fw fa-folder\"></i>
                <span>Catequizandos</span>
            </a>
            <div id=\"catequizandos\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <h6 class=\"collapse-header\">Catequizando:</h6>
                    <a class=\"collapse-item\" href=\"{{ path('catequizando_new') }}\">Cadastrar</a>
                    <a class=\"collapse-item\" href=\"{{ path('catequizando_index') }}\">Listar</a>
                </div>
            </div>
        </li>
        {% if is_granted('ROLE_COORDENADOR') %}
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#catequistas\" aria-expanded=\"true\" aria-controls=\"collapsePages\">
                    <i class=\"fas fa-fw fa-folder\"></i>
                    <span>Catequistas</span>
                </a>
                <div id=\"catequistas\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
                    <div class=\"bg-white py-2 collapse-inner rounded\">
                        <h6 class=\"collapse-header\">Catequista:</h6>
                        {% if is_granted('ROLE_ADMIN') %}
                            <a class=\"collapse-item\" href=\"{{ path('catequista_new') }}\">Cadastrar</a>
                        {% endif %}
                        <a class=\"collapse-item\" href=\"{{ path('catequista_index') }}\">Listar</a>
                    </div>
                </div>
            </li>
        {% endif %}
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#turmas\" aria-expanded=\"true\" aria-controls=\"collapsePages\">
                <i class=\"fas fa-fw fa-folder\"></i>
                <span>Turmas</span>
            </a>
            <div id=\"turmas\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <h6 class=\"collapse-header\">Turma:</h6>
                    {% if is_granted('ROLE_COORDENADOR') %}
                        <a class=\"collapse-item\" href=\"{{ path('turma_new') }}\">Cadastrar</a>
                    {% endif %}
                    <a class=\"collapse-item\" href=\"{{ path('turma_index') }}\">Listar</a>
                </div>
            </div>
        </li>

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#escolas\" aria-expanded=\"true\" aria-controls=\"collapsePages\">
                <i class=\"fas fa-fw fa-folder\"></i>
                <span>Escolas</span>
            </a>
            <div id=\"escolas\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <h6 class=\"collapse-header\">Escola:</h6>
                    {% if is_granted('ROLE_COORDENADOR') %}
                        <a class=\"collapse-item\" href=\"{{ path('escola_new') }}\">Cadastrar</a>
                    {% endif %}
                    <a class=\"collapse-item\" href=\"{{ path('escola_index') }}\">Listar</a>
                </div>
            </div>
        </li>

        {#<!-- Nav Item - Charts -->#}
        {#<li class=\"nav-item\">#}
            {#<a class=\"nav-link\" href=\"charts.html\">#}
                {#<i class=\"fas fa-fw fa-chart-area\"></i>#}
                {#<span>Charts</span></a>#}
        {#</li>#}
        {##}

        <!-- Divider -->
        <hr class=\"sidebar-divider d-none d-md-block\">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class=\"text-center d-none d-md-inline\">
            <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id=\"content-wrapper\" class=\"d-flex flex-column\">

        <!-- Main Content -->
        <div id=\"content\">

            <!-- Topbar -->
            <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

                <!-- Sidebar Toggle (Topbar) -->
                <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                    <i class=\"fa fa-bars\"></i>
                </button>


                <!-- Topbar Navbar -->
                <ul class=\"navbar-nav ml-auto\">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class=\"nav-item dropdown no-arrow d-sm-none\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-search fa-fw\"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\" aria-labelledby=\"searchDropdown\">
                            <form class=\"form-inline mr-auto w-100 navbar-search\">
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Pesquise...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                                    <div class=\"input-group-append\">
                                        <button class=\"btn btn-primary\" type=\"button\">
                                            <i class=\"fas fa-search fa-sm\"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>



                    <div class=\"topbar-divider d-none d-sm-block\"></div>

                    <!-- Nav Item - User Information -->
                    <li class=\"nav-item dropdown no-arrow\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">{{ app.user.nome }}</span>
                            <img class=\"img-profile rounded-circle\" src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRa8zKF8xe85wmOD7fiqsVHiTLsRBG3_CHZrIXO3Y1QFyZTFTlV_w\">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"userDropdown\">
                            <a class=\"dropdown-item\" href=\"{{ path('catequista_show', {'id': app.user.id}) }}\">
                                <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Perfil
                            </a>

                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                                <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Sair
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class=\"container-fluid\">

                {% block body %}
                {% endblock %}
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class=\"sticky-footer bg-white\">
            <div class=\"container my-auto\">
                <div class=\"copyright text-center my-auto\">
                    <span>Copyright &copy; Catequese 2019</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class=\"scroll-to-top rounded\" href=\"#page-top\">
    <i class=\"fas fa-angle-up\"></i>
</a>

<!-- Logout Modal-->
<div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Pronto para sair?</h5>
                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">Aperte \"Sair\" para terminar sua sessão atual.</div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancelar</button>
                <a class=\"btn btn-primary\" href=\"{{ path('app_logout') }}\">Sair</a>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript-->
<script src=\"/admin/vendor/jquery/jquery.min.js\"></script>
<script src=\"/admin/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

<!-- Core plugin JavaScript-->
<script src=\"/admin/vendor/jquery-easing/jquery.easing.min.js\"></script>

<!-- Custom scripts for all pages-->
<script src=\"/admin/js/sb-admin-2.min.js\"></script>

<!-- Page level plugins -->
<script src=\"/admin/vendor/datatables/jquery.dataTables.min.js\"></script>
<script src=\"/admin/vendor/datatables/dataTables.bootstrap4.min.js\"></script>

<!-- Page level custom scripts -->
<script src=\"/admin/js/demo/datatables-demo.js\"></script>

<script>

    \$(document).ready(function() {
        \$('#tabela').DataTable( {
            \"language\": {
                \"lengthMenu\": \"Mostrar _MENU_ exibições por página\",
                \"zeroRecords\": \"Não foi encontrado nenhum resultado\",
                \"info\": \"Mostrando página _PAGE_ de _PAGES_\",
                \"infoEmpty\": \"Não há nada para exibir\",
                \"infoFiltered\": \"(filtrando de _MAX_ exibições)\",
                \"search\": \"Pesquisa\",
                \"paginate\": {
                    \"previous\": \"Voltar\",
                    \"next\": \"Avançar\"
                }
            }
        }
        );
        // \$(\"#catequizando_comprovanteBatizado\").removeClass('custom-file-input');
        // \$(\"div:has(>#catequizando_comprovanteBatizado)\").removeClass('custom-file');
        \$(\"#catequizando_comprovanteBatizado\").change(function(){
            var fileName = \$(this).val();
            fileName = fileName.split(\"\\\\\");
            \$(this).next('.custom-file-label').html(fileName[2]);
        });
        \$(\"#catequizando_comprovanteCasamento\").change(function(){
            var fileName = \$(this).val();
            fileName = fileName.split(\"\\\\\");
            \$(this).next('.custom-file-label').html(fileName[2]);
        });
        \$(\"#catequizando_comprovanteEucaristia\").change(function(){
            var fileName = \$(this).val();
            fileName = fileName.split(\"\\\\\");
            \$(this).next('.custom-file-label').html(fileName[2]);
        });
        \$(\"#catequizando_documento\").change(function(){
            var fileName = \$(this).val();
            fileName = fileName.split(\"\\\\\");
            \$(this).next('.custom-file-label').html(fileName[2]);
        });

        \$(\"#catequizando_nomePadrinhoCrisma\").css('display', 'none');
        \$(\"label[for='catequizando_nomePadrinhoCrisma']\").css('display', 'none');
        \$(\"#catequizando_telPadrinho\").css('display', 'none');
        \$(\"label[for='catequizando_telPadrinho']\").css('display', 'none');
        \$(\"#catequizando_enderecoPadrinho\").css('display', 'none');
        \$(\"label[for='catequizando_enderecoPadrinho']\").css('display', 'none');
        \$(\"#catequizando_cidadePadrinho\").css('display', 'none');
        \$(\"label[for='catequizando_cidadePadrinho']\").css('display', 'none');
        var etapa = \$(\"#catequizando_turma option:selected\").text().split(\" \");

        if(etapa[0] === 'Crisma' || etapa[0] === 'crisma'){
            \$(\"#catequizando_nomePadrinhoCrisma\").css('display', 'block');
            \$(\"label[for='catequizando_nomePadrinhoCrisma']\").css('display', 'block');
            \$(\"#catequizando_telPadrinho\").css('display', 'block');
            \$(\"label[for='catequizando_telPadrinho']\").css('display', 'block');
            \$(\"#catequizando_enderecoPadrinho\").css('display', 'block');
            \$(\"label[for='catequizando_enderecoPadrinho']\").css('display', 'block');
            \$(\"#catequizando_cidadePadrinho\").css('display', 'block');
            \$(\"label[for='catequizando_cidadePadrinho']\").css('display', 'block');
        }else{
            \$(\"#catequizando_nomePadrinhoCrisma\").css('display', 'none');
            \$(\"label[for='catequizando_nomePadrinhoCrisma']\").css('display', 'none');
            \$(\"#catequizando_telPadrinho\").css('display', 'none');
            \$(\"label[for='catequizando_telPadrinho']\").css('display', 'none');
            \$(\"#catequizando_enderecoPadrinho\").css('display', 'none');
            \$(\"label[for='catequizando_enderecoPadrinho']\").css('display', 'none');
            \$(\"#catequizando_cidadePadrinho\").css('display', 'none');
            \$(\"label[for='catequizando_cidadePadrinho']\").css('display', 'none');
        }
        \$(\"#catequizando_turma\").change(function(){

            var etapa = \$(\"#catequizando_turma option:selected\").text().split(\" \");

            if(etapa[0] === 'Crisma' || etapa[0] === 'crisma'){
                \$(\"#catequizando_nomePadrinhoCrisma\").css('display', 'block');
                \$(\"label[for='catequizando_nomePadrinhoCrisma']\").css('display', 'block');
                \$(\"#catequizando_telPadrinho\").css('display', 'block');
                \$(\"label[for='catequizando_telPadrinho']\").css('display', 'block');
                \$(\"#catequizando_enderecoPadrinho\").css('display', 'block');
                \$(\"label[for='catequizando_enderecoPadrinho']\").css('display', 'block');
                \$(\"#catequizando_cidadePadrinho\").css('display', 'block');
                \$(\"label[for='catequizando_cidadePadrinho']\").css('display', 'block');
            }else{
                \$(\"#catequizando_nomePadrinhoCrisma\").css('display', 'none');
                \$(\"label[for='catequizando_nomePadrinhoCrisma']\").css('display', 'none');
                \$(\"#catequizando_telPadrinho\").css('display', 'none');
                \$(\"label[for='catequizando_telPadrinho']\").css('display', 'none');
                \$(\"#catequizando_enderecoPadrinho\").css('display', 'none');
                \$(\"label[for='catequizando_enderecoPadrinho']\").css('display', 'none');
                \$(\"#catequizando_cidadePadrinho\").css('display', 'none');
                \$(\"label[for='catequizando_cidadePadrinho']\").css('display', 'none');
            }
        });
    } );

</script>

</body>

</html>


", "base.html.twig", "/var/www/templates/base.html.twig");
    }
}
