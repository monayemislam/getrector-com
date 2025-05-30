<li class="nav-item">
    <a href="{{ action(\App\Controller\Demo\DemoController::class) }}"
       class="nav-link">Try Rector</a>
</li>

<li class="nav-item">
    <a href="{{ action(\App\Controller\DocumentationController::class) }}"
       class="nav-link">Docs</a>
</li>

<li class="nav-item">
    <a href="{{ action(\App\Controller\HireTeamController::class) }}"
       class="nav-link">Hire Team</a>
</li>

<li class="nav-item">
    <a href="{{ action(\App\Controller\FindRuleController::class) }}"
       class="nav-link">Find Rule</a>
</li>

<li class="nav-item">
    <a href="{{ action(\App\Controller\Blog\BlogController::class) }}"
       class="nav-link">Blog</a>
</li>


<li class="nav-item">
    <a href="{{ action(\App\Controller\ContactController::class) }}"
       class="nav-link">Contact</a>
</li>

<li class="nav-item">
    <a href="{{ action(\App\Ast\Controller\AstController::class) }}"
       class="nav-link">AST</a>
</li>

@isset ($includeFooterLinks)
    <br>

    <li class="nav-item">
        <a onclick="toggleTheme()" class="nav-link" id="theme_toggle" style="cursor: pointer">Dark/Light Theme</a>
    </li>
@endisset
