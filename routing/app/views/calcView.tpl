{extends file="main.tpl"}

{block name=footer}Przykładowa stopka{/block}

{block name=content}
    <div class="pure-menu pure-menu-horizontal bottom-margin">
        <a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
        <span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
    </div>

    
            <section class="col-6 col-12-narrower">
                <h3>Kalkulator</h3>

                <form action="{$conf->action_root}calcCompute" method="post">

                    <div class="row gtr-50">
                        <div class="col-12 col-12-mobilep">
                            <label for="id_amount">Kwota: </label>
                            <input type="text" id="id_amount" name="amount" value="{$form->amount}">
                        </div>

                        <div class="col-12 col-12-mobilep">
                            <label for="length">Ile lat: </label>
                            <input type="text" name="length" id="length" value="{$form->length}">
                        </div>

                        <div class="col-12 col-12-mobilep">
                            <label for="lending_rate">Oprocentowanie</label>
                            <select name="lending_rate" id="lending_rate">
                                <option value="0.01">
                                    1%
                                </option>
                                <option value="0.02">2%
                                </option>
                                <option value="0.03" >3%
                                </option>
                                <option value="0.04" >4%
                                </option>
                                <option value="0.05" >5%
                                </option>
                                <option value="0.06">6%
                                </option>
                                <option value="0.07">7%
                                </option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="pure-button pure-button-primary">Oblicz</button>
                        </div>
                    </div>
                </form>

                <div class="messages">

{include file='messages.tpl'}

{if isset($res->result)}
    <h4>Wynik:</h4>
    <p class="res">{$res->result}</p>
{/if}
                </div>
            </section>
{/block}