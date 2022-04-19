<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.html */
class __TwigTemplate_42905d44fa188f25486e7c0d0f9b5c39 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "messageBase.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("messageBase.html", "index.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "

<script src=\"https://cdn.tiny.cloud/1/9aqiottm4mvmw0otczzdcpexfj3c5b2dwv15qv9jomesqg6u/tinymce/5/tinymce.min.js\" referrerpolicy=\"origin\"></script>
<script>
    tinymce.init({
        selector: 'textarea#editor',
        menubar: false
    });
</script>

";
    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "
  <form action=\"genMesLink.php\" method=\"post\">
    <div class=\"container mt-4 mb-4\">
      <div class=\"row justify-content-md-center\">
        <div class=\"col-md-12 col-lg-8\">
          <h1 class=\"h2 mb-4\">Message Encrypter</h1>
            <div class=\"form-group\">
            <textarea name=\"encryptText\" id=\"editor\" placeholder=\"Enter your message\"></textarea>
            </div>
          <button type=\"submit\" class=\"btn btn-primary float-right\"><span class=\"fa-solid fa-floppy-disk\"></span> Generate link</button>
        </div>
      </div>
    </div>
  </form>

";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  69 => 17,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.html", "C:\\xampp\\htdocs\\test\\templates\\index.html");
    }
}
