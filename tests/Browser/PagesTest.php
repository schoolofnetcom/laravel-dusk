<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Page;

/**
 * @group pages_crud
 **/
class PagesTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testHomeOfPages()
    {
        $this->browse(function ($browser) {
            $browser->visit('/pages')
                    ->assertSee('Páginas');
        });
    }

    public function testAddNewPage()
    {
      $this->browse(function($browser) {
          $browser->visit('/pages/create')
                  ->type('title', 'Sobre nós')
                  ->type('body', 'Conteúdo da página')
                  ->press('salvar')
                  ->assertPathIs('/pages')
                  ->assertSee('Sobre nós');
      });
    }

    public function testRemovePage()
    {
      $page = factory(Page::class)->create([
        'title'=>'Página cadastrada para teste'
      ]);

      $this->browse(function($browser) use ($page) {

          $browser->visit('/pages/'.$page->id)
                  ->press('remover')
                  ->assertPathIs('/pages')
                  ->assertDontSee('Página cadastrada para teste');
      });
    }

    /**
     * @group pages_crud_navigation
     **/
    public function testNavigation()
    {
        $pages = factory(Page::class, 7)->create();

        $this->browse(function ($browser) use ($pages) {
            $browser->visit('/pages')
                    ->press('#btnNovo')
                    ->assertPathIs('/pages/create');
            $browser->visit('/pages/create')
                    ->clickLink('voltar')
                    ->assertPathIs('/pages');
            $browser->visit('/pages')
                    ->clickLink('ver')
                    ->assertPathIs('/pages/'.$pages[0]->id);
            $browser->visit('/pages/'.$pages[0]->id)
                    ->clickLink('voltar')
                    ->assertPathIs('/pages');
        });
    }
}
