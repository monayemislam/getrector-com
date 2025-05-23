<?php

declare(strict_types=1);

use App\Controller\Llm\LlmsTxtController;
use App\Controller\Stats\FindRuleStatsController;
use App\Ast\Controller\AstController;
use App\Ast\Controller\AstDetailController;
use App\Ast\Controller\ProcessAstFormController;
use App\Controller\Blog\BlogController;
use App\Controller\Blog\PostController;
use App\Controller\CodebaseRenovationController;
use App\Controller\ContactController;
use App\Controller\Demo\DemoController;
use App\Controller\Demo\DemoDetailController;
use App\Controller\Demo\ProcessDemoFormController;
use App\Controller\DocumentationController;
use App\Controller\FindRuleController;
use App\Controller\HireTeamController;
use App\Controller\HomepageController;
use App\Controller\RssController;
use App\Controller\RuleDetailController;
use App\Controller\Socials\PostThumbnailController;
use App\Controller\Socials\RuleThumbnailController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomepageController::class);

Route::get('llms.txt', LlmsTxtController::class);

// old pages redirect
Route::redirect('/documentation/rules-overview', '/find-rule');
Route::redirect('step-by-step', '/hire-team');
Route::redirect('/about', '/');
Route::redirect('project-timeline', '/hire-team');

Route::get('documentation/{section?}', DocumentationController::class);

Route::get('blog', BlogController::class);
Route::get('book', fn() => redirect()->to('https://leanpub.com/rector-the-power-of-automated-refactoring'));

Route::get('contact', ContactController::class);
Route::get('hire-team', HireTeamController::class);

Route::redirect('play-and-learn', 'ast');

Route::get('blog/{postSlug}', PostController::class);
Route::get('/thumbnail/{title}.png', PostThumbnailController::class)
     ->where('title', '.*');



Route::get('rss.xml', RssController::class);

// 2024 new stuff
Route::get('codebase-renovation', CodebaseRenovationController::class);

Route::get('find-rule', FindRuleController::class);
Route::get('rule-detail/{slug}', RuleDetailController::class);
Route::get('/rule-thumbnail/{ruleSlug}.png', RuleThumbnailController::class)
    ->where('ruleSlug', '.*');

Route::get('stats/find-rule', FindRuleStatsController::class);

Route::redirect('custom-rule/{anything}', '/demo')
    ->where('anything', '.*');
Route::redirect('custom-rule', '/demo');

// demo
Route::get('demo/{uuid}', DemoDetailController::class)
    ->whereUuid('uuid');
Route::get('demo', DemoController::class);
Route::post('process-demo', ProcessDemoFormController::class);

// ast
Route::get('ast/{hash}', AstDetailController::class);
Route::get('ast', AstController::class);
Route::post('process-ast', ProcessAstFormController::class);
