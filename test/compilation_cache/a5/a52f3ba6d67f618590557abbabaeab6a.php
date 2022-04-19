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

/* saveMessage.html */
class __TwigTemplate_80c19ccb3451f40078af783802b6afa0 extends Template
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
        $this->parent = $this->loadTemplate("messageBase.html", "saveMessage.html", 1);
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

<script>
                
    function copyToClipboard(link) {

      navigator.clipboard.writeText(link).then(() => {
      }).catch(err => {
      })

      
    }
</script>

";
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "
<div class=\"row\" style=\"margin-top: 100px\">
    <div class=\"span6\" style=\"float: none; margin: 0 auto;\">
      <p>Copy the link to your message</p>
      <button class=\"btn btn-primary\" onClick=\"copyToClipboard('";
        // line 26
        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
        echo "')\">
      <span class=\"fa-solid fa-copy\"></span>
      Copy</button>
      </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "saveMessage.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 26,  77 => 22,  73 => 21,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "saveMessage.html", "C:\\xampp\\htdocs\\test\\templates\\saveMessage.html");
    }
}
