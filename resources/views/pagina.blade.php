<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Winred.bet</title>
  <meta content="" name="casino live, casino en vivo, apuestas deportivas, pronosticos deportivos, slots">   
  <link href="assets/img/icono1.png" rel="icon">
  <link href="assets/img/icono1.png" rel="apple-touch-icon">  
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">  
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
    
</head>
<body>    
  

<div class="modal fade" id="modalRegistrarCuenta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
            <div class="modal-content2">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registro de Cuenta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form method="POST" id="formulario_registro_cuenta" name="formulario_registro_cuenta">
                 @csrf
                <div class="modal-body">

                    <div class="row">
                        <div class="col">
                            <div class="form-group" >
                                <label for="usuario">Nombre Completo</label>
                                <input type="text" class="form-control" id="nombrecompleto" name="nombrecompleto" placeholder="Nombre Completo">
                            </div>


                            <div class="form-group" >
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Intruduzca su Email de Registro">
                            </div>


                            <div class="form-group" >
                                <label for="email">Numero Movil</label>
                                <input type="text" class="form-control" id="movil" name="movil" placeholder="Numero Movil">
                            </div>


                            <div class="form-group" >
                                <label for="email">Wathsapp</label>
                                <input type="text" class="form-control" id="movil_wp" name="movil_wp" placeholder="Numero Wathsapp">
                            </div>                        
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="idmoneda">Moneda a usar</label>
                                <select class="form-control" id="idmoneda" name="idmoneda"> 
                                    <option value="">Seleccione la moneda</option>
                                    <option value="DOL">Dolar Americano</option>
                                    <option value="SOL">Soles</option>
                                </select>                    
                            </div>

                            <div class="form-group" >
                                <label for="usuario">Usuario dentro de la Plataforma</label>
                                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
                            </div>

                        </div>
                    </div>

                    
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary"  onclick="registrar_cuenta(); ">Registrar Cuenta</button>
                </div>
              </form>
            </div>
          </div>    
  </div>



  <div class="modal fade" id="modalRetiro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
            <div class="modal-content2">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registro de Retiro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form method="POST" id="formulario_retiro" name="formulario_retiro">
                 @csrf
                <div class="modal-body">
                    <div class="form-group" >
                        <label for="usuario">Usuario</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
                    </div>
                    <div class="form-group" >
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Intruduzca su Email de Registro">
                    </div>
                    <div class="form-group">
                        <label for="idmoneda">Moneda</label>
                        <select class="form-control" id="idmoneda" name="idmoneda"> 
                            <option value="">Seleccione la moneda</option>
                            <option value="DOL">Dolar Americano</option>
                            <option value="SOL">Soles</option>
                        </select>                    
                    </div>
                    <div class="form-group">
                        <label for="monto">Monto</label>
                        <input type="number" class="form-control" id="monto" name="monto" placeholder="Introduzca el monto a depositar...">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary"  onclick="registrar_retiro(); return false;" >Registrar Retiro</button>
                </div>
              </form>
            </div>
          </div>    
  </div>


  <div class="modal fade" id="modalDeposito" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content2">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registro de Deposito</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form method="POST" id="formulario_deposito" name="formulario_deposito">
                 @csrf
                <div class="modal-body">
                    <div class="form-group" >
                        <label for="usuario">Usuario</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
                    </div>
                    <div class="form-group" >
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Intruduzca su Email de Registro">
                    </div>
                    <div class="form-group">
                        <label for="idmoneda">Moneda</label>
                        <select class="form-control" id="idmoneda" name="idmoneda"> 
                            <option value="">Seleccione la moneda</option>
                            <option value="DOL">Dolar Americano</option>
                            <option value="SOL">Soles</option>
                        </select>                    
                    </div>
                    <div class="form-group">
                        <label for="referencia">Numero Referencia</label>
                        <input type="text" class="form-control" id="referencia" name="referencia" placeholder="Introduzca el numero de referencia del pago...">
                    </div>


                    <div class="form-group">
                        <label for="monto">Monto</label>
                        <input type="number" class="form-control" id="monto" name="monto" placeholder="Introduzca el monto a depositar...">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary"  onclick="registrar_deposito(); return false;" >Registrar Deposito</button>
                </div>
              </form>
            </div>
          </div>
  </div>









  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content2">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Reglamento</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="max-height:350px; overflow:auto">
          <div class="modal-body modal-body-custom white-text" id="ModalRulesContent" >
            <div class="col-12 font-weight-bold modal-rules-title pt-5">
              Reglamento de apuestas</div>
            <div class="col-12 modal-rules-content pt-4">
              Las siguientes reglas específicas regulan el uso por parte del cliente de todos los productos y servicios de
              apuestas deportivas interactivas que se ofrecen en el sitio web o en los portales móviles.
            </div>
            <div class="col-12 modal-rules-content pt-4">Forman parte de los Términos y Condiciones Generales del
              Operador, que se aplican a todos los productos y servicios interactivos y de apuestas que el Operador ofrece
              a las personas que se registran o son titulares de una cuenta de apuestas (el "Usuario final") con el
              Operador.</div>
            <div class="col-12 modal-rules-content pt-4">En la medida en que exista alguna inconsistencia entre los
              Términos y Condiciones Generales y cualquiera de estas Reglas de Apuestas Deportivas, prevalecerán los
              Términos y Condiciones Generales.</div>
            <div class="col-12 modal-rules-content pt-4">El idioma de referencia de las reglas de apuestas actuales es el
              inglés. A pesar de la atención prestada a nuestras traducciones, en el caso de cualquier discrepancia entre
              los significados de las versiones traducidas de estas reglas de apuestas y la versión en inglés, prevalecerá
              el significado de la versión en inglés.</div>
            <div class="col-12 font-weight-bold modal-rules-title pt-5">1. Reglas generales de apuestas</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">1.1 General</div>
            <div class="col-12 modal-rules-content pt-4">1.1.1 Toda la información de apuestas proporcionada por la
              Compañía se hace de buena fe. Sin embargo, la Compañía no puede aceptar responsabilidad por errores u
              omisiones con respecto a fechas, horarios, lugares, competidores, probabilidades, resultados, estadísticas u
              otra información de apuestas. La Compañía mantiene su prerrogativa de enmendar cualquier error aparente y
              deberá tomar todas las medidas equitativas para asegurarse de que los mercados se manejan con rectitud y
              claridad. La Compañía mantiene su prerrogativa de tener la decisión final.</div>
            <div class="col-12 modal-rules-content pt-4">1.1.2 Si un evento, que se define como un partido o evento
              deportivo organizado entre dos equipos o entre individuos, comienza antes de la hora programada, entonces
              sólo se considerarán válidas las apuestas realizadas antes del inicio del evento (esto excluye las apuestas
              en vivo especificadas) . La Compañía se reserva el derecho de anular todas las apuestas realizadas después
              de la hora de inicio real en el caso de que un Mercado no esté cerrado o suspendido en el momento correcto
              (esto excluye las apuestas en vivo especificadas).</div>
            <div class="col-12 modal-rules-content pt-4">1.1.3 Si parece haber una inconsistencia entre los nombres en
              inglés y en otros idiomas que se usan en los eventos que se muestran en el sitio web, la versión en inglés
              se tomará como referencia.</div>
            <div class="col-12 modal-rules-content pt-4">1.1.4 Es responsabilidad exclusiva del cliente conocer el puntaje
              del partido y toda la información relacionada con el evento en todo momento. Es muy recomendable que el
              cliente verifique el estado del partido antes de hacer una apuesta.</div>
            <div class="col-12 modal-rules-content pt-4">1.1.5 Es el derecho reservado de la Compañía de enmendar estas
              Reglas en cualquier momento por cualquier motivo. Cualquier cambio de este tipo se considerará vinculante y
              efectivo en el mismo instante en que se haya publicado en el sitio web.</div>
            <div class="col-12 modal-rules-content pt-4">1.1.6 El cliente reconoce el hecho de que todos los datos
              mostrados en el sitio web pueden estar sujetos a demoras o pueden ser inexactos, y realizar apuestas basadas
              en dichos datos es responsabilidad del cliente. La Compañía no proporciona ninguna garantía en cuanto a la
              exactitud, integridad o puntualidad de dichos datos, y la Compañía no asume ninguna responsabilidad por
              cualquier pérdida (directa o indirecta) que sufra el cliente como resultado de la actividad basada en ella.
            </div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">1.2 Abandono y Reprogramación</div>
            <div class="col-12 modal-rules-content pt-4">1.2.1 Si un evento no comienza o finaliza de acuerdo con la fecha
              programada para ambas ocasiones previamente anunciadas en las reglas específicas de deportes, todas las
              apuestas serán canceladas, excepto aquellas en los Mercados que se hayan resuelto.</div>
            <div class="col-12 modal-rules-content pt-4">1.2.2. Si un evento comienza de acuerdo con su fecha y hora
              programadas, pero luego se abandona o se suspende y no se completa dentro del marco de tiempo definido
              anteriormente, solo las apuestas consideradas válidas serán las que se hayan resuelto en los mercados,
              mientras que el resto se anulará. .</div>
            <div class="col-12 modal-rules-content pt-4">1.2.3. Si un Evento no finaliza dentro del período de tiempo
              prescrito de acuerdo con las reglas deportivas específicas, o se declara el resultado oficial o el organismo
              deportivo correspondiente que regule el Evento declara un resultado, la Compañía se reserva el derecho de
              anular el Evento, y La decisión de la empresa se considera definitiva.</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">1.3 Cambio de sede</div>
            <div class="col-12 modal-rules-content pt-4">1.3.1 A menos que se maneje un cambio de sede en las Reglas de
              Apuestas para Eventos Específicos, entonces:</div>
            <div class="col-12 modal-rules-content pt-4">1.3.1.1. En el caso de un cambio de sede (el equipo local juega
              fuera o viceversa), todas las apuestas en el partido serán canceladas.</div>
            <div class="col-12 modal-rules-content pt-4">1.3.1.2. Todas las apuestas en eventos que no sean de equipo se
              considerarán válidas en el caso de que se haya producido un cambio de sede después de que el mercado ya se
              haya abierto.</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">1.4. Períodos de tiempo</div>
            <div class="col-12 modal-rules-content pt-4">1.4.1. Si hay un cambio en la duración del evento. Todas las
              apuestas realizadas en dicho evento serán consideradas inválidas.</div>
            <div class="col-12 modal-rules-content pt-4">1.4.2. Se considera que todos los eventos que se han producido
              durante el tiempo de alargue o de detención durante el tiempo normal, por ejemplo, un gol anotado en el
              primer tiempo de alargue de un partido de fútbol se considera como anotado en los 45 minutos.*</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">1.5. Resultados</div>
            <div class="col-12 modal-rules-content pt-4">1.5.1. En su caso, las posiciones en el podio se considerarán
              como el resultado final, sin tener en cuenta las inhabilitaciones o correcciones futuras del resultado. Si
              no hay una ceremonia en el podio, los resultados se determinarán de acuerdo con el resultado oficial del
              organismo rector pertinente en el momento de la liquidación del Mercado, independientemente de cualquier
              descalificación o modificación posterior de los resultados. En el caso de que no haya un resultado oficial
              disponible, el resultado se determinará con referencia a la evidencia disponible conocida en el momento de
              la liquidación del Mercado.</div>
            <div class="col-12 modal-rules-content pt-4">1.5.2 Todos los Mercados generalmente se liquidan solo después de
              que un Evento haya concluido. Simplemente como servicio al cliente, algunos mercados pueden liquidarse antes
              de que se declare el resultado oficial. La Compañía se reserva el derecho de revertir cualquier liquidación
              realizada debido a un Mercado que se resuelve por error.</div>
            <div class="col-12 modal-rules-content pt-4">1.5.3. La Compañía se reserva el derecho de suspender la
              liquidación en cualquier mercado si aparece una incertidumbre sobre cualquier resultado.</div>
            <div class="col-12 modal-rules-content pt-4">1.5.4. La Compañía no reconocerá ninguna enmienda o cambio en los
              resultados realizados 72 horas después de la hora de inicio del Evento, para las apuestas que ya se hayan
              resuelto.</div>
            <div class="col-12 modal-rules-content pt-4">1.5.5. Si aparece una contradicción entre el resultado oficial y
              los resultados mostrados en la sección de resultados en el sitio web, el asunto se resolverá utilizando los
              materiales de video de la Compañía del evento en cuestión como referencia para definir el resultado exacto.
              Sin embargo, si no hay tal material de video del evento en cuestión, entonces el resultado exacto se
              determinará en relación con el resultado del órgano rector del evento mencionado como se declaró en el sitio
              web oficial. Si el sitio web oficial no puede proporcionar el resultado o el resultado publicado del sitio
              web oficial es manifiestamente incorrecto, entonces la Compañía se reserva el derecho de tomar decisiones /
              enmiendas para determinar el resultado final. La decisión de la Compañía es definitiva y vinculante en este
              sentido.</div>
            <div class="col-12 font-weight-bold modal-rules-title pt-5">2. Los mercados</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">2.1. General</div>
            <div class="col-12 modal-rules-content pt-4">2.1.1. Apuestas a largo plazo - apostando al ganador de un
              evento, carrera o torneo. Una apuesta a largo plazo implica la selección de un ganador en un torneo,
              competición, liga o evento, ya sea desde el inicio o en cualquier etapa del torneo, competición, liga o
              evento antes de la conclusión de la competencia donde los resultados aún no están decididos. El número de
              lugares que se pagan como ganadores se indicará en el título del Mercado. Si uno de los oponentes /
              jugadores no comienza un evento, una carrera o un torneo, todas las apuestas 'abiertas' de lo mencionado
              anteriormente serán canceladas. Si los ganadores son dos o más, o se declara un 'Dead Heat' en cualquier
              Mercado Abierto, entonces las probabilidades de pago (menos la participación) se dividen por el número de
              ganadores y se liquidan en consecuencia con la participación de vuelta</div>
            <div class="col-12 modal-rules-content pt-4">2.1.2. Apuesta a uno: apostar a uno de los oponentes / equipos
              para ser el ganador en un evento o para obtener una puntuación más alta en un evento. El resto de las reglas
              de la apuesta a uno se pueden encontrar en las reglas de apuestas del evento específico. La expresión 'The
              Field' se relaciona con todos los competidores que no sean los especificados en la comparación de la apuesta
              a uno.</div>
            <div class="col-12 modal-rules-content pt-4">2.1.3. Handicap (HDP): Handicap significa apostar cuando un
              competidor o equipo recibe una ventaja virtual (liderando efectivamente esa ventaja antes de que comience el
              Evento). El ganador es el competidor o equipo con la mejor puntuación después de agregar el handicap dado al
              resultado.</div>
            <div class="col-12 modal-rules-content pt-4">2.1.4. Handicap Asiático (En juego): todas las apuestas
              realizadas en Hándicap Asiático para un mercado en juego se liquidan de acuerdo con el puntaje que se
              muestra para el excedente del evento / mitad, después de que se haya realizado la apuesta: cualquier gol,
              anotado antes de la apuesta realizada no se tiene en cuenta.</div>
            <div class="col-12 modal-rules-content pt-4">2.1.5. Más de / Menos de: este tipo de apuesta le da a un jugador
              la posibilidad de apostar por un número de goles (juegos, etc.). Las apuestas se liquidan en función de la
              suma total de puntos / goles, etc. logrados (lo que da un resultado superior o inferior al número de goles
              establecido por el Operador) en una partida o serie de coincidencias en las que se realizaron las apuestas.
            </div>
            <div class="col-12 modal-rules-content pt-4">2.1.6. Impar / Par: las apuestas se relacionan con la suma total
              de los puntos (goles) jugados en el partido que resultan en un número par o impar.</div>
            <div class="col-12 modal-rules-content pt-4">2.1.7. Apuestas múltiples: la apuesta múltiple representa una
              unificación de selecciones (dos como mínimo), combinadas en una apuesta. Para que este tipo de apuesta
              adquiera un estado ganador, se necesitaría que todas las selecciones incluidas se predijeron correctamente.
              Si se pierde una (o más) selecciones, también se pierde la apuesta múltiple. Si se suspende una (o más)
              selecciones, las probabilidades para las selecciones mencionadas se repetirán a 1.00. Por favor, comuníquese
              con el glosario de apuestas si necesita una explicación más detallada sobre las apuestas múltiples. Tenga en
              cuenta que la página contiene información general, no una explicación de cada término.</div>
            <div class="col-12 modal-rules-content pt-4">2.1.8 Apuestas de sistema. La apuesta del sistema se parece a una
              apuesta múltiple en gran medida. Representa un recuento de selecciones y, a pesar de las apuestas múltiples,
              no todas las selecciones incluidas en una apuesta del sistema deben predecirse correctamente para que usted
              gane la apuesta. Las apuestas del sistema generalmente se colocan en mayores probabilidades con apuestas más
              grandes para garantizar una buena ganancia, independientemente del hecho de que el jugador puede tener un
              par de selecciones perdedoras. El cálculo de los rendimientos prósperos no suele ser demasiado complicado,
              pero en algunas situaciones, los apostadores pueden requerir la asistencia de una calculadora de apuestas
              cuando se trata de apuestas de sistemas más complejos.</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">2.2. Tipos de apuestas de fútbol</div>
            <div class="col-12 modal-rules-content pt-4">A menos que se declare de manera diferente, el resultado de una
              apuesta en un juego de fútbol se relaciona con el final del tiempo regular en el que se realizó la apuesta
              (también contando cualquier tiempo de detención o lesión agregado por el árbitro oficial). El tiempo extra y
              las penalizaciones no están incluidas.</div>
            <div class="col-12 modal-rules-content pt-4">2.2.1. 1X2 como tipo de apuesta le da a un jugador la posibilidad
              de apostar en cualquiera de los dos: el primero, (más comúnmente el equipo local) ganador; X - el resultado
              del juego en un empate; o 2 - el segundo, (generalmente el equipo visitante) ganador.</div>
            <div class="col-12 modal-rules-content pt-4">2.2.2. Puntuación correcta: las apuestas se realizan al predecir
              el resultado correcto o la puntuación al final del partido o evento que se ofrece para las apuestas.
              Puntuación correcta para ganar “5-0UP” (o 0-5UP) el equipo seleccionado debe ganar por cinco o más goles.
            </div>
            <div class="col-12 modal-rules-content pt-4">2.2.3. Goles totales: las apuestas de goles totales implican la
              predicción de los goles o puntos totales acumulados en un partido en el que se realizaron las apuestas.
            </div>
            <div class="col-12 modal-rules-content pt-4">2.2.4. Medio tiempo / Tiempo completo (HT / FT): apuestas para
              pronosticar el resultado de medio tiempo y el resultado de tiempo completo de un evento (sin contar el
              tiempo adicional ni los penales). Respecto a este mercado, H se relaciona con el primer equipo nombrado en
              el evento (generalmente el equipo local); D se relaciona con un empate; A se relaciona con el segundo equipo
              nombrado en el evento (generalmente el equipo visitante). Por ejemplo, HA significa que el primer equipo
              nombrado en el evento (el equipo local) tomará la delantera en el descanso y el segundo equipo nombrado en
              el evento (el equipo visitante) tomará la iniciativa a tiempo completo.</div>
            <div class="col-12 modal-rules-content pt-4">2.2.5. Primer gol / Último gol: apuestas en qué equipo marcará el
              primer o último gol en un evento. Respecto a este mercado, HF se relaciona con el primer equipo nombrado en
              el evento (generalmente el equipo local) que marca el primer gol. HL se relaciona con el primer equipo
              nombrado en el evento que anotó el último gol. AF se relaciona con el segundo equipo nombrado en el evento
              (generalmente el equipo visitante) que marca el primer gol. AL se relaciona con el segundo equipo nombrado
              en el evento que anotó el último gol. Ningún gol (Sin goles) (NG) no se ha marcado ningún gol durante el
              evento específico. Los propios goles se asignan al equipo premiado con el gol. Si un evento se suspende,
              luego de un gol marcado, todas las apuestas realizadas en '1º Gol' y 'Sin goles' se mantendrán, todas las
              apuestas en 'Último gol' se anularán. Si un evento se suspende sin que se marque ningún gol, todas las
              apuestas sobre Primer gol, Último gol y Ningún gol se considerarán nulas.</div>
            <div class="col-12 modal-rules-content pt-4">2.2.6. Qué equipo inicia: apostar a qué equipo será el que
              iniciará el evento. Si un evento se suspende posteriormente a su inicio, todas las apuestas aún se
              consideran válidas. En caso de que la hora de inicio se adelantara a la hora programada en el sitio web,
              todas las apuestas posteriores a la hora de inicio se considerarán nulas.</div>
            <div class="col-12 modal-rules-content pt-4">2.2.7. Total del equipo local vs. Total del equipo visitante:
              apuestas sobre el número total de goles marcados por los equipos locales frente al número total de goles
              anotados por los equipos visitantes en relación con los partidos en una liga específica, jugados en un día
              determinado. 'Local' se relaciona con el primer equipo nombrado y 'Visitante' se relaciona con el segundo
              equipo nombrado. Si una (o más) partidos se suspenden, la apuesta será nula.</div>
            <div class="col-12 modal-rules-content pt-4">2.2.8. Equipo Más de / Menos de: apuesta a un gol marcado por un
              equipo determinado en un evento. Si el total es un número mayor que la línea Más de / Menos de, se considera
              que el resultado final es 'Más de'. Si el total es un número menor que la línea Más de / Menos de, se
              considera que el resultado es 'Menos de' como resultado ganador.</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">2.3. Córneres</div>
            <div class="col-12 modal-rules-content pt-4">Córneres: el resultado del Número de Córneres se decide por el
              número total de Córneres de los equipos locales / visitantes en un partido designado. Los Córneres
              adjudicadas pero no tomados no cuentan.</div>
            <div class="col-12 modal-rules-content pt-4">2.3.1 Handicap - Handicap significa apostar en qué equipo tomará
              el mayor número de Córneres durante un partido, incluidos los handicaps. Si se abandona un evento, todas las
              apuestas se considerarán nulas.</div>
            <div class="col-12 modal-rules-content pt-4">2.3.2 Más de / Menos de: apuestas realizadas en el número total
              de Córneres que ambos equipos toman durante un evento. Si el total es un número mayor que la línea Más de /
              Menos de, se considera que el resultado final es 'Más de'. Si el total es un número menor que la línea Más
              de / Menos de, se considera que el resultado es 'Menos de' como resultado ganador.</div>
            <div class="col-12 modal-rules-content pt-4">2.3.3 Primer tiro de esquina: apuestas realizadas a qué equipo
              tomará el primer tiro de esquina en un juego. Si se abandona un evento después de haber tirado el primer
              tiro de esquina, todas las apuestas son válidas. Si un evento se abandona antes del primer tiro de esquina,
              todas las apuestas se considerarán nulas.</div>
            <div class="col-12 modal-rules-content pt-4">2.3.4 Último tiro de esquina: apuestas realizadas a qué equipo
              tomará el último tiro de esquina de un juego. Si el evento se abandona antes de su hora de finalización
              programada, todas las apuestas se considerarán nulas.</div>
            <div class="col-12 modal-rules-content pt-4">2.3.5 Próximo tiro de esquina: apuestas colocadas a qué equipo
              tomará el próximo tiro de esquina en un evento. Todas las apuestas se consideran válidas si se toma el tiro
              de esquina.</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">2.4. Amonestaciones (Tarjetas amarillas y/o
              rojas)</div>
            <div class="col-12 modal-rules-content pt-4">Las tarjetas amarillas se cuentan como un punto, mientras que las
              tarjetas rojas se cuentan como dos puntos. La cantidad más alta de puntos que un jugador competidor puede
              acumular durante un evento es tres (uno para una primera tarjeta amarilla y dos para una tarjeta roja
              consecutiva subsiguiente). Las tarjetas entregadas a no jugadores (gerentes, entrenadores, suplentes, etc.)
              no se cuentan.</div>
            <div class="col-12 modal-rules-content pt-4">2.4.1 Handicap: apuestas realizadas a qué equipo adquirirá un
              mayor número de tarjetas durante un evento, todos los handicaps incluidos. Todas las apuestas se
              considerarán nulas si un evento se suspende.</div>
            <div class="col-12 modal-rules-content pt-4">2.4.2 Más de / Menos de: apuestas sobre el número total de
              tarjetas acumuladas por ambos equipos durante un evento. Si el total es un número mayor que la línea Más de
              / Menos de, se considera que el resultado final es 'Más de'. Si el total es un número menor que la línea Más
              de / Menos de, se considera que el resultado es 'Menos de' como resultado ganador. Si un evento se suspende,
              todas las apuestas serán canceladas.</div>
            <div class="col-12 modal-rules-content pt-4">2.4.3 Primera tarjeta: apuestas en qué equipo será el que
              recibirá la primera tarjeta (tarjeta amarilla o roja) en el juego. Si se amonestan dos o más jugadores para
              el mismo incidente, se considerará que el jugador que recibió la primera tarjeta del arbitro del partido es
              el jugador que ha recibido la primera tarjeta del juego. Si un evento se suspende posteriormente a la
              primera tarjeta que se sacó, todas las apuestas son válidas. Si un evento se suspende antes de que se emita
              la primera tarjeta, todas las apuestas serán canceladas.</div>
            <div class="col-12 modal-rules-content pt-4">2.4.4 Última tarjeta: apuesta a qué equipo será el que recibirá
              la última tarjeta (tarjeta amarilla o roja) en un juego. Si se amonestan dos o más jugadores para el mismo
              incidente, se considerará como el jugador que recibió la última tarjeta en el juego, al último jugador que
              haya recibido una tarjeta del árbitro del partido. Todas las apuestas se considerarán nulas si el evento se
              suspende.</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">2.5. Fuera de juego (Offsides)</div>
            <div class="col-12 modal-rules-content pt-4">2.5.1 Handicap: apuestas realizadas a el equipo que será tomado
              fuera de juego más veces durante un evento, todos los handicaps incluidos. Si se abandona un evento, todas
              las apuestas se considerarán nulas.</div>
            <div class="col-12 modal-rules-content pt-4">2.5.2. Más de / Menos de: apuestas sobre la cantidad total de
              sanciones de fuera de juego tomadas por el árbitro del partido durante un evento. Si el total es un número
              mayor que la línea Más de / Menos de, se considera que el resultado final es 'Más de'. Si el total es un
              número menor que la línea Más de / Menos de, se considera que el resultado es 'Menos de' como resultado
              ganador. Si un evento se suspende, todas las apuestas serán canceladas.</div>
            <div class="col-12 modal-rules-content pt-4">2.5.3. Primer fuera de juego: las apuestas realizadas a qué
              equipo será tomado fuera de juego primero en un evento. Si un evento se abandona después de que se haya
              tomado la primera decisión de fuera de juego, todas las apuestas se consideran válidas. Si se suspende antes
              de que se sancione un fuera de juego, todas las apuestas se considerarán nulas.</div>
            <div class="col-12 modal-rules-content pt-4">2.5.4. Último fuera de juego: apuestas colocadas en el equipo que
              será tomado fuera de juego en un evento. Todas las apuestas se considerarán nulas si el evento en cuestión
              se suspende.</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">2.6. Sustituciones</div>
            <div class="col-12 modal-rules-content pt-4">2.6.1. Handicap: apuestas realizadas en qué equipo realizará un
              mayor número de sustituciones durante un juego, incluidas todas las desventajas. Todas las apuestas se
              considerarán nulas si un evento se suspende.</div>
            <div class="col-12 modal-rules-content pt-4">2.6.2. Más de / Menos de: apuestas realizadas sobre el número
              total de sustituciones durante un evento. Si el total es un número mayor que la línea Más de / Menos de, se
              considera que el resultado final es 'Más de'. Si el total es un número menor que la línea Más de / Menos de,
              se considera que el resultado es 'Menos de' cómo resultado ganador. Si un evento se suspende, todas las
              apuestas serán canceladas.</div>
            <div class="col-12 modal-rules-content pt-4">2.6.3. Primera sustitución: apuestas realizadas a qué equipo
              realizará la primera sustitución en un juego. Si dos o más jugadores son sustituidos al mismo tiempo,
              entonces el jugador cuyo número se muestra primero por el cuarto oficial será considerado la primera
              sustitución en el juego. Si un evento se abandona después de que se haya realizado la primera sustitución en
              el juego, todas las apuestas aún se consideran válidas. Si un evento se suspende antes de que se realicen
              sustituciones, todas las apuestas se considerarán nulas.</div>
            <div class="col-12 modal-rules-content pt-4">2.6.4. Última sustitución: apuestas realizadas en qué equipo
              realizará la última sustitución en un evento. Si dos o más jugadores son sustituidos al mismo tiempo,
              entonces el jugador cuyo número se muestra en último lugar por el cuarto árbitro se considerará la última
              sustitución en el juego. Si se abandona el evento, todas las apuestas se considerarán nulas.</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">2.7. Equipos sin goles</div>
            <div class="col-12 modal-rules-content pt-4">Apostar a si un equipo se mantendrá o no 'sin goles', lo que
              significa que el equipo en cuestión no permitirá que el otro equipo marque un gol durante el evento.</div>
            <div class="col-12 modal-rules-content pt-4">Si un evento se cancela después de que el equipo local haya
              marcado un gol, las apuestas 'Visitante sin goles' se mantendrán, mientras que las apuestas 'Local sin
              goles' serán canceladas. Si el equipo Visitante solo marca un gol, las apuestas 'Local sin goles' se
              mantendrán, mientras que las apuestas 'Visitante sin goles' serán canceladas. Si los goles son marcados por
              ambos equipos, el local y el visitante, todas las apuestas serán válidas. Si se abandona un Evento sin que
              se haya marcado un gol, todas las apuestas serán canceladas.</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">2.8. Penales</div>
            <div class="col-12 modal-rules-content pt-4">Apostar si se otorgará o no un penal durante un evento. Si el
              evento se abandona después de que se haya otorgado y tomado un penal, entonces todas las apuestas se
              consideran válidas. Si se abandona un evento sin que se otorguen penales, todas las apuestas se considerarán
              nulas.</div>
            <div class="col-12 modal-rules-content pt-4">2.8.1 Disparos de penales: Apostando a qué equipo ganará en
              disparos de penales. En las apuestas de hándicap, el resultado incluye todas los penales tomados, más la
              muerte súbita. En las apuestas por más / menos, el resultado solo incluye diez penales, mientras que las
              patadas repentinas en el punto de penal no se cuentan.</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">2.9. Liga de fantasía</div>
            <div class="col-12 modal-rules-content pt-4">Los partidos de fantasía representan parejas de equipos de
              distintos eventos. Todos los lugares sirven estrictamente para fines de referencia solo.</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">2.10. Específicos 15 minutos más / menos</div>
            <div class="col-12 modal-rules-content pt-4">Los 15 minutos específicos Más de / Menos de: apuestas que se
              definen por la cantidad total de puntos (goles, esquinas, juegos, tarjetas, etc.) al final de cada período
              de tiempo de 15 minutos de un evento. Si el total es un número más alto, que la línea predefinida de Más de
              / Menos de, entonces se considera que 'Más de' es el resultado ganador. Si el total es un número menor que
              la línea Más de / Menos de predefinida, se considera que el resultado es 'Menos de' cómo resultado ganador.
            </div>
            <div class="col-12 modal-rules-content pt-4">Las apuestas Más de / Menos de específicas en los 15 minutos se
              liquidan de acuerdo con el momento preciso en que se marca un gol (cuando la bola pasa la línea de gol), lo
              mismo se aplica al número de apuestas de tiros de esquina (esquinas tomadas). Si un evento se suspende,
              todas las apuestas realizadas en períodos de 15 minutos que no se hayan completado se considerarán nulas.
            </div>
            <div class="col-12 modal-rules-content pt-4">Si ya ha pasado un período específico de 15 minutos, todas las
              apuestas se considerarán válidas. Cualquier acción que incluya jugar en o alrededor del punto de
              penalización; una falta; un tiro libre peligroso y similar estará sujeto a la aprobación de la Compañía si
              tales acciones se han llevado a cabo en los últimos dos (2) minutos antes de que expire un período de 15
              minutos.</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">2.11. Tiro libre</div>
            <div class="col-12 modal-rules-content pt-4">No se considerarán los tiros libres que hayan sido otorgados pero
              no tomados. Los tiros libres indirectos y directos se consideran un tiro libre. Los tiros de gol y los tiros
              de penal no se consideran un tiro libre.</div>
            <div class="col-12 modal-rules-content pt-4">2.11.1. Handicap: apuestas realizadas sobre qué equipo tomará la
              mayoría de los tiros libres durante un evento, incluidos todos los handicaps. Todas las apuestas se
              considerarán nulas si el evento se suspende.</div>
            <div class="col-12 modal-rules-content pt-4">2.11.2. Más de / Menos de: apuestas realizadas sobre la cantidad
              total de tiros libres realizados por ambos equipos durante un evento. Si el total es un número mayor que la
              línea Más de / Menos de, se considera que el resultado final es 'Más de'. Si el total es un número menor que
              la línea Más de / Menos de, se considera que el resultado es 'Menos de' como resultado ganador. Si un evento
              se suspende, todas las apuestas serán canceladas.</div>
            <div class="col-12 modal-rules-content pt-4">2.11.3. Primer tiro libre: las apuestas realizadas sobre qué
              equipo realizará el primer tiro libre en un juego. Si se abandona un evento después de que se haya realizado
              el primer tiro libre en el juego, todas las apuestas aún se consideran válidas. Si un evento se suspende
              antes de que se haya realizado un tiro libre, todas las apuestas se considerarán nulas.</div>
            <div class="col-12 modal-rules-content pt-4">2.11.4. Último tiro libre: las apuestas realizadas a qué equipo
              se llevará el último tiro libre durante un evento. Todas las apuestas se considerarán nulas si un evento se
              suspende.</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">2.12. Saque de meta</div>
            <div class="col-12 modal-rules-content pt-4">Se otorgará un saque de meta al equipo defensor si la pelota
              cruza completamente la línea final, como resultado del contacto con un jugador contrario. Las patadas hechas
              por el portero después de obtener el balón luego de una jugada no se consideran saque de meta.</div>
            <div class="col-12 modal-rules-content pt-4">2.12.1. Handicap: apuestas realizadas sobre qué equipo realizará
              la mayor cantidad de goles durante un evento, incluidos todos los handicaps. Todas las apuestas se
              considerarán nulas si el evento se suspende.</div>
            <div class="col-12 modal-rules-content pt-4">2.12.2. Más de / Menos de: apuestas realizadas sobre la cantidad
              total de goles lanzados por ambos equipos durante un evento. Si el total es un número mayor que la línea Más
              de / Menos de, se considera que el resultado final es 'Sobre'. Si el total es un número menor que la línea
              Más de / Menos de, se considera que el resultado es 'Bajo' como resultado ganador. Si un evento se suspende,
              todas las apuestas serán canceladas.</div>
            <div class="col-12 modal-rules-content pt-4">2.12.3. Primer saque de meta: apuestas en las que el equipo
              realizará la primera patada de un juego. Si se abandona un evento después de que se haya realizado el primer
              saque de meta en el juego, todas las apuestas aún se consideran válidas. Si un evento se suspende antes de
              que se hayan realizado los goles, todas las apuestas se considerarán nulas.</div>
            <div class="col-12 modal-rules-content pt-4">2.12.4. Último saque de meta: apuestas colocadas en el equipo que
              realizará el último gol durante un evento. Todas las apuestas se considerarán nulas si un evento se
              suspende.</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">2.13. Saque de banda</div>
            <div class="col-12 modal-rules-content pt-4">Un lanzamiento se otorga a un equipo si la pelota pasa
              completamente la línea de lateral como resultado de la interacción de un jugador oponente con la pelota.
            </div>
            <div class="col-12 modal-rules-content pt-4">2.13.1. Handicap: apuestas realizadas sobre qué equipo realizará
              la mayor cantidad de saques de banda durante un evento, incluidos todos los handicaps. Todas las apuestas se
              considerarán nulas si el evento se suspende.</div>
            <div class="col-12 modal-rules-content pt-4">2.13.2. Más de / Menos de: apuestas realizadas sobre la cantidad
              total de saques de bandas lanzados por ambos equipos durante un evento. Si el total es un número mayor que
              la línea Más de / Menos de, se considera que el resultado final es 'Más de'. Si el total es un número menor
              que la línea Más de / Menos de, se considera que el resultado es 'Menos de' como resultado ganador. Si un
              evento se suspende, todas las apuestas serán canceladas.</div>
            <div class="col-12 modal-rules-content pt-4">2.13.3. Primer saque de banda: apuestas realizadas en qué equipo
              realizará el primer saque de banda en un juego. Si se abandona un evento después de que se realiza el primer
              saque de banda en el juego, todas las apuestas aún se consideran válidas. Si un evento se suspende antes de
              que se realice un saque de banda, todas las apuestas se considerarán nulas.</div>
            <div class="col-12 modal-rules-content pt-4">2.13.4. Último saque de banda: las apuestas realizadas en el
              equipo que realizará el último saque de banda durante un evento. Todas las apuestas se considerarán nulas si
              un evento se suspende.</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">2.14. Específico 10 minutos más de / menos de
            </div>
            <div class="col-12 modal-rules-content pt-4">Las apuestas Más de / Menos de del décimo minuto específicas se
              liquidan de acuerdo con el momento preciso en que se marca un gol (cuando el balón pasa la línea de gol), lo
              mismo se aplica al número de apuestas de esquina (esquinas tomadas). Si un evento se suspende, todas las
              apuestas realizadas en períodos de 10 minutos que no se hayan completado se considerarán nulas.</div>
            <div class="col-12 modal-rules-content pt-4">Si ya ha pasado un período específico de 10 minutos, todas las
              apuestas se considerarán válidas. Cualquier acción que incluya jugar en o alrededor del punto de
              penalización; una falta; un tiro libre peligroso y similar estará sujeto a la aprobación de la Compañía si
              tales acciones se han llevado a cabo en los últimos dos (2) minutos antes de que expire un período de 10
              minutos. Si hay una inconsistencia en los resultados mostrados en la sección de resultados del sitio web, la
              contradicción se definirá utilizando los materiales de video de la Compañía del evento en cuestión como
              referencia, para definir el resultado exacto.</div>
            <div class="col-12 modal-rules-content pt-4">Sin embargo, si no hay tal material de video del evento en
              cuestión, entonces el resultado exacto se determinará en relación con el resultado del órgano rector del
              evento mencionado como se declaró en el sitio web oficial. En el caso de que el sitio web oficial sea
              incapaz de suministrar dichos datos, o esta información sea errónea en el sitio web oficial, la Compañía
              mantiene su prerrogativa de tomar decisiones / correcciones / alteraciones para definir el resultado final.
              La decisión de la Compañía es definitiva y vinculante.</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">2.15. Empate sin goles</div>
            <div class="col-12 modal-rules-content pt-4">2.15.1. Las apuestas realizadas en la predicción de una victoria
              Local o Visitante en un partido. Si el juego termina en un empate, todas las apuestas serán reembolsadas.
            </div>
            <div class="col-12 modal-rules-content pt-4">2.15.2. Empate sin goles en la primera mitad: las apuestas
              realizadas en la predicción de una victoria en casa o fuera de casa solo en la primera mitad de un partido.
              Si la primera mitad del juego termina en un empate, todas las apuestas serán reembolsadas.</div>
            <div class="col-12 modal-rules-content pt-4">2.15.3. Empate sin goles en la segunda mitad: las apuestas
              realizadas en la predicción de una victoria en casa o fuera de casa solo en la segunda mitad de un partido.
              Si la segunda mitad del juego termina en un empate, todas las apuestas serán reembolsadas.</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">2.16. Ambos, uno o ninguno</div>
            <div class="col-12 modal-rules-content pt-4">Ambos - Ambos equipos en un partido anotan</div>
            <div class="col-12 modal-rules-content pt-4">Uno - Cualquiera de los equipos en un partido anota</div>
            <div class="col-12 modal-rules-content pt-4">Ninguno - Ambos equipos en un partido no logran marcar</div>
            <div class="col-12 modal-rules-content pt-4">2.16.1. Si se suspende un Evento después de que solo el equipo
              local haya marcado un gol, entonces las apuestas 'Ninguna de las dos' seguirán siendo válidas, mientras que
              las apuestas 'Ambos' y 'Una' se considerarán nulas. Si se abandona un Evento después de que solo el equipo
              Visitante haya marcado un gol, las apuestas 'Ninguna' permanecerán válidas, mientras que 'Ambos' y 'Uno' se
              anularán. Si se abandona un Evento después de que el equipo local y el equipo visitante hayan marcado goles,
              todas las apuestas seguirán siendo válidas. Si se abandona un Evento sin que se haya marcado ningún gol,
              todas las apuestas se considerarán nulas.</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">2.17. Sin Goles</div>
            <div class="col-12 modal-rules-content pt-4">2.17.1. Se apuesta a si un equipo ganará sin recibir un gol antes
              del final del partido. Todas las apuestas se liquidarán al final de la hora programada para el juego,
              excepto el tiempo extra y los penales.</div>
            <div class="col-12 modal-rules-content pt-4">2.17.2. Si se abandona un Evento después de que solo el equipo
              local haya marcado, todas las apuestas 'Visitante' seguirán siendo válidas mientras que las apuestas 'Local'
              serán canceladas. Si solo el equipo Visitante ha marcado un gol, las apuestas 'Local' seguirán siendo
              válidas mientras que 'Visitante' se anulará. Si el equipo local y el equipo visitante han marcado, todas las
              apuestas seguirán siendo válidas. Si se abandona un Evento antes de que se haya marcado un gol, todas las
              apuestas serán canceladas.</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">2.18 Hándicap 3 way</div>
            <div class="col-12 modal-rules-content pt-4">2.18.1. Todas las apuestas se liquidarán de acuerdo con las
              probabilidades mostradas utilizando la puntuación real en el partido ajustado para el handicap.</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">2.19. Ganar un Tiempo</div>
            <div class="col-12 modal-rules-content pt-4">2.19.1. Las apuestas se basan en la predicción de que un equipo
              marcará más goles que su rival en una de las dos mitades.</div>
            <div class="col-12 modal-rules-content pt-4">2.19.2. Local para ganar cualquier mitad</div>
            <div class="col-12 modal-rules-content pt-4">2.19.2.1. Se apuesta a si el equipo local podrá marcar más goles
              que el equipo visitante en una de las dos mitades. Si se abandona el partido, todas las apuestas se
              anularán, excluyendo las apuestas que ya se hayan determinado de forma incondicional.</div>
            <div class="col-12 modal-rules-content pt-4">2.19.3. Visitante ganar la primer mitad</div>
            <div class="col-12 modal-rules-content pt-4">2.19.3.1 Las apuestas realizadas sobre si el equipo Visitante
              podrá marcar más goles que el equipo local en una de las dos mitades. Si se suspende el partido, todas las
              apuestas se anularán, excluyendo las apuestas que ya se hayan determinado de forma incondicional.</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">2.20. Ganar los dos tiempos</div>
            <div class="col-12 modal-rules-content pt-4">2.20.1. Las apuestas se colocan sobre si el equipo seleccionado
              podrá marcar más goles que su rival en ambas mitades del partido.</div>
            <div class="col-12 modal-rules-content pt-4">2.20.2. Local para ganar las dos mitades.</div>
            <div class="col-12 modal-rules-content pt-4">2.20.2.1 Las apuestas realizadas en el equipo local para marcar
              más goles que el equipo visitante en ambas partes del partido. Si se suspende el partido, todas las apuestas
              se anularán, excluyendo las apuestas que ya se hayan determinado de forma incondicional.</div>
            <div class="col-12 modal-rules-content pt-4">2.20.3. Visitante a ganar ambos tiempos</div>
            <div class="col-12 modal-rules-content pt-4">2.20.3.1. Las apuestas colocadas en el equipo visitante para
              anotar más goles que el equipo local en ambas partes del partido. Si se suspende el partido, todas las
              apuestas se anularán, excluyendo las apuestas que ya se hayan determinado de forma incondicional.</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">2.21. Empate / No empate</div>
            <div class="col-12 modal-rules-content pt-4">2.21.1 Apuestas que predicen si el resultado final de un partido
              será un empate o no un empate. Todas las apuestas se liquidarán al final de la hora programada para el
              juego, excepto el tiempo extra y los penales.</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">2.22. Impar / Par</div>
            <div class="col-12 modal-rules-content pt-4">2.22.1. 1º mitad par / impar: apuestas que predicen si la
              cantidad de goles marcados en la primera mitad será un número par o impar.</div>
            <div class="col-12 modal-rules-content pt-4">2.22.2. A tiempo completo / par / impar: apuestas que predicen si
              la cantidad de goles marcados en el partido será un número par o impar.</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">2.23. A tiempo completo</div>
            <div class="col-12 modal-rules-content pt-4">Todas las apuestas se liquidarán al final de la hora programada
              para el juego, excepto el tiempo extra y los penales. Si se suspende el partido, todas las apuestas se
              anularán, excluyendo las apuestas que ya se hayan determinado de forma incondicional.</div>
            <div class="col-12 font-weight-bold modal-rules-title pt-5">3. Fútbol</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">3.1. Reglas generales de fútbol</div>
            <div class="col-12 modal-rules-content pt-4"> 3.1.1 Cuando los partidos estén programados para jugar fuera del
              horario regular (por ejemplo, períodos de tiempo especiales en varios torneos o partidos amistosos), todas
              las apuestas se liquidarán al final de ese tiempo programado.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.2 Cuando se juega un tiempo menor al normal, el operador se
              reserva el derecho de suspender la liquidación de todas las apuestas en espera del resultado oficial de ese
              partido.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.3 A menos que los partidos de tiempo no regulares se muestren
              deliberadamente en el sitio web antes de todos los partidos de fútbol, &#8203;&#8203;las apuestas realizadas
              en dichos partidos se considerarán nulas.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.4 Si un partido de fútbol se pospone, se suspende o se
              abandona y no se reanuda dentro de las 12 horas posteriores a la hora de inicio programado, el partido se
              anulará (independientemente de cualquier decisión oficial con respecto al resultado). El resultado de todas
              las apuestas en los partidos suspendidos es decidido por la Compañía a su entera discreción.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.5 Las apuestas de la primera mitad (1H) se aplican solo a la
              primera mitad del juego. Si se suspende un partido durante la primera mitad, todas las apuestas se
              considerarán nulas. Si se suspende un partido durante la segunda mitad, todas las apuestas de la primera
              mitad siguen siendo válidas.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.6 La Compañía proporciona información (por ejemplo, terreno
              neutral, reservas, temporizador, información estadística, fechas, hora de inicio, etc.) como un deber y no
              acepta responsabilidades. Es responsabilidad del cliente estar familiarizado con la información correcta
              para cualquier coincidencia.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.7 A menos que se indique lo contrario, si un evento está
              programado para jugarse en un terreno neutral (pero se juega en un terreno no neutral o viceversa) todas las
              apuestas se consideran válidas. Si se produce un cambio de sede para un evento (el equipo local queda fuera
              o viceversa), todas las apuestas en el partido se considerarán nulas. Las apuestas también se considerarán
              nulas si los nombres del equipo local y visitante se muestran incorrectamente al revés.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.8 La puntuación se actualizará para las apuestas de fútbol en
              vivo y los Mercados que se muestran durante la negociación en vivo se refieren a la puntuación mostrada en
              el momento en que se realiza la apuesta. Los avisos del temporizador y de la tarjeta roja se dan solo a modo
              de referencia.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.9 Para las apuestas en juego, durante un juego, con respecto
              a las acciones que la Compañía, a su entera y absoluta discreción, considera peligrosas donde el resultado,
              el desempeño de un equipo o jugador pueden verse afectados; o garantiza cambiar las probabilidades / precios
              o los Mercados o la Información de Apuestas ('Juego de Peligro'), queda el derecho de la Compañía de aplazar
              la aprobación de las apuestas y puede aprobar o rechazar las apuestas posteriormente al Juego de Peligro.
              Todas las demás acciones en un juego se consideran Juego seguro y las apuestas se seguirán considerando para
              su aprobación.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.10 Para las apuestas en juego, la colocación de la apuesta se
              autoriza hasta el minuto 90, que incluye cualquier tiempo de lesión en el tiempo completo para la mayoría de
              los eventos (a discreción de la Compañía). Sin embargo, a partir del minuto 85 de juego o los últimos cinco
              minutos antes de que finalice el tiempo reglamentario, lo que sea relevante para un juego, cualquier acción
              que no sea las ya mencionadas anteriormente, se considerará Juego seguro y, por lo tanto, todas las apuestas
              destacadas realizadas pueden ser considerado para aprobación: acciones que incluyen jugar en o alrededor del
              punto de penalización; una falta; un tiro libre peligroso y similar considerado por la Compañía como
              peligroso (posibilidad de gol).</div>
            <div class="col-12 modal-rules-content pt-4">3.1.11 Para apuestas en vivo, todas las apuestas pendientes se
              rechazarán automáticamente a partir del momento en que el árbitro finalice el partido a tiempo parcial o de
              tiempo completo.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.12 Para las apuestas de partidos de fantasía en vivo, las
              apuestas se permiten hasta el minuto 90, incluido el tiempo de lesión por tiempo completo para la mayoría de
              los juegos (a discreción de la Compañía). Desde el tiempo de inicio (00:00) del juego hasta antes del final
              del tiempo reglamentario (90 minutos), lo que sea aplicable en un juego, cualquier acción que no sea las que
              se enumeran a continuación, se considerará Juego seguro y, por lo tanto, todas las apuestas pendientes. los
              puestos pueden ser considerados para aceptación: acciones que incluyen jugar en o alrededor del punto de
              penalización; una falta; un tiro libre peligroso y similar considerado por la Compañía como peligroso
              (posibilidad de gol).</div>
            <div class="col-12 modal-rules-content pt-4">3.1.13 Impar o Par y 1º Mitad impar / par y 2º Mitad impar / par
              .</div>
            <div class="col-12 modal-rules-content pt-4">3.1.13.1 Impar / Par: significa apuestas que se determinan según
              si el número total de puntos (goles, juegos, etc.) en el resultado final de un Evento es impar o par.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.13.2 1º mitad impar / par: significa apuestas que se
              determinan según si el número total de puntos al final de la primera mitad de un Evento es Impar o Par.
            </div>
            <div class="col-12 modal-rules-content pt-4">3.1.13.3 2º mitad impar / par: significa apuestas que se
              determinan según si el número total de puntos al final de la segunda mitad de un Evento es Impar o Par.
            </div>
            <div class="col-12 modal-rules-content pt-4">3.1.13.4 Las apuestas de la 1º mitad se anularán si un Evento se
              suspende antes del final de la 1º mitad. Pero si un Evento se suspende después del final de la 1º mitad,
              todas las apuestas de la 1º mitad serán válidas.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.14 Tarjetas totales.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.14.1 Una tarjeta amarilla cuenta como un punto y una tarjeta
              roja cuenta como dos puntos. El número máximo de puntos que un jugador puede recibir durante un partido es
              tres (uno para una amarilla y dos para una roja, la segunda tarjeta amarilla no cuenta).</div>
            <div class="col-12 modal-rules-content pt-4">3.1.14.2 Las tarjetas que se muestran a los no jugadores
              (gerentes, entrenadores, sustitutos, etc.) no cuentan.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.14.2.1 Mercado de tarjetas amarillas ('YC'). Solamente se
              tendrán en cuenta las tarjetas amarillas a los jugadores y arqueros que estén en el campo de juego para los
              mercados de tarjetas amarillas totales y con handicap. Ninguna segunda tarjeta amarilla que resulte en la
              expulsión de un jugador contará en el cálculo del número de tarjetas amarillas en el partido.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.14.2.2 Las apuestas sobre tarjetas amarillas en un periodo
              determinado no tienen en cuenta el tiempo que el juego estuvo detenido. Por ejemplo, si una apuesta a
              tarjetas amarillas se realizó en el intervalo 85:00 y 88:59 y una tarjeta amarilla fue mostrada en 90+1
              min., la apuesta será considerada perdida.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.14.2.3 Las tarjetas amarillas o rojas que se muestren a los
              jugadores o arqueros en el campo de juego luego del silbato final no contaran. Si una tarjeta amarilla es
              mostrada por el referi en el medio tiempo por una ofensa cometida en el primer tiempo (ej: una tarjeta
              amarilla postergada), esta tarjeta va a contar en el primer tiempo Si el referi muestra una tarjeta amarilla
              por una falta cometida en el entretiempo la tarjeta va a contar para las apuestas a tarjetas en el segundo
              tiempo.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.14.2.4 Las apuestas en el mercado 'Tarjetas Amarillas/Rojas'
              (también conocidas como YRC o tarjetas) serán resueltas de la siguiente manera: Una tarjeta amarilla se
              cuenta como una tarjeta, una tarjeta roja se cuenta como dos tarjetas amarillas. Una segunda tarjeta
              amarilla para el mismo jugador no va a ser contada y va a ser tratada como una tarjeta roja. Esto quiere
              decir que un jugador puede tener a lo sumo 3 tarjetas por partido.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.14.2.5 El número de tarjetas amarillas y rojas, saques de
              córner y tiros a los palos/travesaño van a ser determinados de acuerdo a la grabación de video. En un evento
              donde no haya grabacion de video, o en un evento donde la grabación sea interrumpida, el número de tarjetas
              amarillas, rojas y corners se van a contar con los resultados oficiales. Un cambio hecho en el minuto 46 de
              acuerdo a la fuentes oficiales van a ser considerado como un cambio hecho en el descanso. Un córner que se
              volvió a tirar va a ser considerado como el mismo corner. Solo los tiros de esquina que se hayan realizado
              contarán para el conteo de apuestas en Total Corners.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.14.3 Número de tarjetas totales.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.14.3.1 Handicap y 1º tiempo Handicap.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.14.3.1.1 Handicap significa apostar en qué equipo recibirá la
              mayor cantidad de tarjetas durante un partido, incluidos los handicaps.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.14.3.1.2 Handicap en la 1º mitad significa apostar en qué
              equipo recibirá la mayor cantidad de tarjetas durante la primera mitad del partido, incluidos los handicaps.
            </div>
            <div class="col-12 modal-rules-content pt-4">3.1.14.3.1.3 Las apuestas de la 1º mitad del Handicap serán
              anuladas si el partido se suspende durante la primera mitad del partido. Sin embargo, las apuestas seguirán
              siendo válidas si el partido se suspende durante la segunda mitad del partido.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.14.3.2 1º mitad Más de / Menos de.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.14.3.2.1 Más de / Menos de significa apostar sobre el número
              total de tarjetas recibidas por ambos equipos durante un partido.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.14.3.2.2 Más de / Menos de del 1º tiempo significa apostar
              sobre el número total de tarjetas recibidas por ambos equipos durante la primera mitad de un partido.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.14.3.2.3 Si el total es mayor que la línea Más de / Menos de,
              el resultado ganador es Más de; si el total es menor que la línea Más de / Menos de, el resultado ganador es
              Menos de.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.14.3.2.4 Las apuestas se anularán si la partida se suspende a
              menos que ya se haya determinado la liquidación de las apuestas.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.14.4 Primera tarjeta y 2º mitad Primera tarjeta.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.14.4.1 Primera tarjeta significa apostar en qué equipo
              recibirá la primera tarjeta (amarilla o roja) en un partido.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.14.4.2 2º mitad primera tarjeta significa apostar a qué
              equipo recibirá la primera tarjeta (amarilla o roja) en la 2º mitad de un partido.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.14.4.3 Si dos o más jugadores reciben una tarjeta por el
              mismo incidente, el jugador al que el árbitro le muestre la primera tarjeta será el ganador.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.14.4.4 Si un partido se suspende después de que se haya
              sacado la primera tarjeta, todas las apuestas son válidas. Si se suspende un partido antes de que se haya
              sacado la primera tarjeta, todas las apuestas se anularán.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.14.5 Última tarjeta.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.14.5.1 Última tarjeta significa apostar en qué equipo
              recibirá la última tarjeta (Amarillo o Rojo) en un partido.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.14.5.2 Si dos o más jugadores reciben una tarjeta por el
              mismo incidente, se considerará ganador al jugador al que se le muestre la última tarjeta del árbitro.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.14.5.3 Si se suspende un partido, todas las apuestas se
              anularán.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.14.6 Próxima tarjeta.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.14.6.1 Próxima tarjeta significa apostar para predecir qué
              equipo recibirá una tarjeta a continuación, ya sea una tarjeta roja y / o una tarjeta amarilla.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.14.6.2 Todas las apuestas se consideran válidas si se ha
              recibido la tarjeta designada.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.14.7 Tarjetas a un solo equipo Más de o Menos de.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.14.7.1 Total de tarjetas a un solo equipo Más de / Menos de
              significa apostar para predecir el número total de tarjetas recibidas por un equipo específico en un
              partido.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.14.7.2 Si el total es mayor que la línea Más de / Menos de,
              el resultado ganador es Más de; si el total es menor que la línea Más de / Menos de, el resultado ganador es
              Menos de.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15. Córneres.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.1. Un tiro de esquina cobrado pero no tomado no cuenta.
            </div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.2. Número de Córneres.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.2.1. Handicap y 1º mitad (1st Half) Handicap.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.2.1.1. Handicap significa apostar en qué equipo tomará la
              mayor cantidad de Córneres durante un partido, incluidos los handicaps.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.2.1.2 Handicap en la 1º mitad significa apostar en qué
              equipo tendra la mayor cantidad de Córneres durante la 1º mitad del partido, incluidos los handicaps.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.2.1.3 Las apuestas del hándicap de la 1º mitad se anularán
              si el partido se suspende durante la 1º mitad del partido. Las apuestas de hándicap de la 1º mitad seguirán
              siendo válidas si el partido se suspende durante la 2º mitad del partido.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.2.2 Más de / Menos de y 1st half Más de / Menos de.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.2.2.1 Más de / Menos de significa apostar por el número
              total de Córneres realizados por ambos equipos durante un partido.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.2.2.2 Más de / Menos de del primer tiempo significa
              apostar por el número total de Córneres realizados por ambos equipos durante el primer tiempo de un partido.
            </div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.2.2.3 Si el total es mayor que la línea Más de / Menos de,
              el resultado ganador es Más de; si el total es menor que la línea Más de / Menos de, el resultado ganador es
              Menos de.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.2.2.4 Las apuestas se anularán si el partido se suspende a
              menos que ya se haya determinado la liquidación de las apuestas.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.3 Primer tiro de esquina, 1º mitad primer tiro de esquina
              y 2º mitad primer tiro de esquina.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.3.1 Primer tiro de esquina significa apostar en qué equipo
              realizará el primer tiro de esquina en un partido.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.3.2 Primera mitad primer tiro de esquina significa apostar
              a qué equipo realizará el primer tiro de esquina en la primera mitad de un partido.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.3.3 Segunda mitad primer tiro de esquina significa apostar
              a qué equipo realizará el primer tiro de esquina en la segunda mitad de un partido.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.3.4 Las apuestas se anularán si el partido se suspende a
              menos que ya se haya determinado la liquidación de las apuestas.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.4 Último tiro de esquina y Primer mitad último tiro de
              esquina.</div>
            <div class="col-12 modal-rules-content pt-4">Último tiro de esquina significa apostar en qué equipo realizará
              el úlltimo tiro de esquina en un partido.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.4.2 Primera mitad último tiro de esquina significa apostar
              a qué equipo realizará el último tiro de esquina primera mitad de un partido.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.4.3 Primera mitad último tiro de esquina, las apuestas se
              anularán si el partido se suspende durante la primera mitad del partido. Primera mitad último tiro de
              esquina, las apuestas seguirán siendo válidas si el partido se suspende durante la segunda mitad del
              partido.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.5 Próximo tiro de esquina.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.5.1 Próximo tiro de esquina significa apostar en qué
              equipo realizará el próximo tiro de esquina en un partido.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.5.2 Todas las apuestas se consideran válidas si el tiro de
              esquina ha sido realizado.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.6 Córneres exactos.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.6.1 Equipo local Córneres exactos y primera mitad Equipo
              local Córneres exactos.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.6.1.1 Córneres exactos del equipo local significa apostar
              el número exacto de tiros esquinas realizados por el equipo local después del tiempo regular de juego.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.6.1.2 Córneres exactos de la primera mitad del equipo
              local significa apostar por el número exacto de Córneres realizados por el equipo local durante la primera
              mitad del partido.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.6.1.3 Tanto para los Córneres Exactas del Equipo Local
              como para los tiros de esquinas Exactas del equipo local en la Primera Mitad, las apuestas se anularán si el
              partido se suspende a menos que ya se haya determinado la liquidación de las apuestas.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.6.2 Córneres exactos del equipo visitante y Córneres
              exactos del primer tiempo del equipo visitante.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.6.2.1 Córneres exactos del equipo visitante: apostar por
              el número exacto de Córneres realizados por el equipo visitante después del tiempo regular de juego.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.6.2.2 Córneres exactos del equipo visitante en la primera
              mitad significa apostar el número exacto de Córneres realizados por el equipo visitante durante la primera
              mitad del partido.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.6.2.3 Tanto para los Córneres Exactos como para los
              Córneres Exactos del Equipo Visitante en el primer tiempo, las apuestas se anularán si el partido se
              suspende a menos que ya se haya determinado la liquidación de las apuestas.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.7 Total de Córneres agregados y primer tiempo total de
              Córneres agregados.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.7.1 Total de Córneres agregados significa apostar por el
              número total de Córneres realizados por ambos equipos después del tiempo regular de juego.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.7.2 Córneres totales del primer tiempo agregados significa
              apostar por el número total de Córneres tomadas por ambos equipos durante la primera mitad del partido.
            </div>
            <div class="col-12 modal-rules-content pt-4">3.1.15.7.3 Tanto para los Córneres totales agregados como para
              los Córneres totales agregados del primer semestre, las apuestas se anularán si el partido se suspende a
              menos que ya se haya determinado la liquidación de las apuestas.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.16 Penales</div>
            <div class="col-12 modal-rules-content pt-4">3.1.16.1 Penales significa apostar a un penal que se otorga y se
              toma durante un partido.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.16.2 Si un partido se suspende después de que se haya
              otorgado un penal y se haya realizado, todas las apuestas siguen siendo válidas</div>
            <div class="col-12 modal-rules-content pt-4">3.1.16.3 Si se suspende un partido antes de que se haya realizado
              un penal, todas las apuestas se anularán</div>
            <div class="col-12 modal-rules-content pt-4">3.1.17 Eliminación por penales </div>
            <div class="col-12 modal-rules-content pt-4">3.1.17.1 Eliminación por penales significa apostar a qué equipo
              ganará la eliminación por penales.</div>
            <div class="col-12 modal-rules-content pt-4">3.1.17.2 En apuestas de hándicap, el resultado incluye todos los
              penales realizados en la eliminación, incluida la muerte súbita. En las apuestas de más / menos, el
              resultado solo incluye los diez penales de la eliminación y no incluye la muerte súbita.</div>
            <div class="col-12 font-weight-bold modal-rules-title pt-5">4. Baloncesto</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">4.1 Reglas de baloncesto</div>
            <div class="col-12 modal-rules-content pt-4">4.1.1 Todos los mercados de tiempo completo, incluidas las
              apuestas en juego, se liquidarán según el resultado final, incluidas las horas extra (a menos que se
              especifique lo contrario).</div>
            <div class="col-12 modal-rules-content pt-4">4.1.2 Si un evento no comienza en la fecha de inicio programada,
              todas las apuestas serán canceladas (a menos que se declaren de manera diferente).</div>
            <div class="col-12 modal-rules-content pt-4">4.1.3 Si un evento comienza pero se suspende o se abandona dentro
              de las doce (12) horas de la hora de inicio programada, las apuestas a tiempo completo todavía se consideran
              válidas si al menos cuarenta y tres (43) minutos de un partido de la NBA o treinta y cinco (35) minutos de
              cualquier otro partido de baloncesto se han completado. Las apuestas también se considerarán válidas si el
              órgano de gobierno pertinente declara un resultado oficial. De lo contrario, las apuestas en partidos
              suspendidos o abandonados se anularán, con la excepción de las apuestas realizadas en mercados que se han
              determinado de forma incondicional.</div>
            <div class="col-12 modal-rules-content pt-4">4.1.4 Con respecto a las apuestas de la primer mitad, las
              apuestas se liquidan según la suma del primer y segundo cuarto para determinar el ganador. Con respecto a
              las apuestas de la segunda mitad, las apuestas se liquidan en base a la suma de los puntajes de los cuartos
              3 y 4 para determinar el ganador. Las apuestas de la segunda mitad incluyen las puntuaciones obtenidas en
              tiempo extra (si corresponde).</div>
            <div class="col-12 modal-rules-content pt-4">4.1.5 Para las apuestas del cuarto cuarto, los puntos anotados en
              el juego de tiempo extra se excluyen para determinar el ganador.</div>
            <div class="col-12 modal-rules-content pt-4">4.1.6 Si un partido se suspende o se abandona, las apuestas
              realizadas en Mitades o Cuartos no finalizados se considerarán nulas. Si se completan las Mitades o los
              Cuartos designados, las apuestas serán válidas.</div>
            <div class="col-12 modal-rules-content pt-4">4.1.7 La puntuación no se actualizará para las apuestas de
              básquetbol en juego y la desventaja mostrada durante las operaciones en vivo se relaciona con la puntuación
              al inicio del partido, es decir, 0-0. La hora y las puntuaciones mostradas son solo para fines de
              referencia.</div>
            <div class="col-12 modal-rules-content pt-4">4.1.8 Mercados en los que un equipo encesta la primera canasta,
              se resuelve en el equipo, anotando los primeros puntos. Si un evento se suspende o se abandona
              posteriormente al primer punto que se ha calificado, las apuestas siguen siendo válidas.</div>
            <div class="col-12 modal-rules-content pt-4">4.1.9. Los mercados de la última canasta se deciden por el equipo
              que anotó los últimos puntos de un partido (incluidos el tiempo extra) o si es la mitad / cuarto tiempo (sin
              incluir el tiempo extra) Si un partido se suspende o se abandona, todas las apuestas se anularán, excepto
              aquellas en mercados que se hayan determinado incondicionalmente.</div>
            <div class="col-12 modal-rules-content pt-4">4.1.10 Los mercados especiales (incluidos el número de Puntos,
              Rebotes, Asistencias, Tres Puntos y Tiros Libres, etc.) son válidos si ambos jugadores participan en el
              partido. Si uno o ambos jugadores no participan en el partido, todas las apuestas serán canceladas. Los
              resultados para los mercados especiales incluyen los tiempos extras jugados, a menos que se especifique lo
              contrario. Todos los resultados se obtienen cuando el cuerpo directivo (NBA.com, FIBA.com, etc.) declara el
              resultado oficial al final del juego y cualquier cambio posterior en las estadísticas no es válido para
              realizar apuestas.</div>
            <div class="col-12 modal-rules-content pt-4">4.1.11 Local / Visitante para eventos de la NCAA (National
              Collegiate Athletic Association) se proporciona únicamente como referencia.</div>
            <div class="col-12 modal-rules-content pt-4">4.1.12 Los mercados de Fantasy Basketball (incluidos los mercados
              en juego) son parejas o combinaciones de equipos de diferentes eventos. Los partidos que involucren a ambos
              equipos deben dar un puntaje el mismo día o, de lo contrario, las apuestas se consideran nulas. Los lugares
              para los mercados de Fantasy Basketball se utilizan precisamente para fines de referencia solamente.</div>
            <div class="col-12 modal-rules-content pt-4">4.1.13 Para ganar la mayoría de los cuartos, los mercados se
              deciden por el equipo que gana la mayor cantidad de cuartos durante un partido de baloncesto. Si el
              resultado de un cuarto específico es un empate, ninguno de los equipos gana ese cuarto. Los tiempos extras
              NO se incluyen en este mercado. Si un partido es suspendido o abandonado, todas las apuestas serán
              canceladas.</div>
            <div class="col-12 font-weight-bold modal-rules-title pt-5">5. Tenis</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">5.1 Reglas de tenis</div>
            <div class="col-12 modal-rules-content pt-4">5.1.1 Los mercados se relacionan con el ganador del partido o un
              determinado conjunto. Los mercados de hándicap se basan en sets o juegos (se relacionan con el título del
              mercado); Los mercados Más de / Menos de e Impar / Par se basan en juegos (a menos que se especifique lo
              contrario).</div>
            <div class="col-12 modal-rules-content pt-4">5.1.2 Si un jugador no comienza un torneo o un partido, todas las
              apuestas realizadas en ese jugador se considerarán nulas.</div>
            <div class="col-12 modal-rules-content pt-4">5.1.3 Si un jugador (o una pareja) es descalificado durante un
              evento, todas las apuestas serán canceladas, excepto las apuestas realizadas en mercados que han sido
              resueltos.</div>
            <div class="col-12 modal-rules-content pt-4">5.1.4. Si un evento se pospone o se aplaza, pero el partido aún
              se completa, entonces todas las apuestas se consideran válidas.</div>
            <div class="col-12 modal-rules-content pt-4">5.1.5 Todas las apuestas se seguirán considerando válidas
              independientemente de cualquier cambio de sede o superficie de la cancha (contando también los partidos en
              movimiento desde canchas exteriores a canchas cubiertas o viceversa).</div>
            <div class="col-12 modal-rules-content pt-4">5.1.6 Si la cantidad predeterminada de juegos necesarios para
              ganar un evento se altera del originalmente definido, entonces todas las apuestas se considerarán nulas,
              excepto aquellas que se hayan resuelto.</div>
            <div class="col-12 modal-rules-content pt-4">5.1.7 Ganador del primer set (Ganador del segundo, tercer set,
              etc.) se refiere al resultado del set especificado. Todas las apuestas se considerarán nulas si el conjunto
              especificado no se completa.</div>
            <div class="col-12 modal-rules-content pt-4">5.1.8 Las apuestas de tenis en juego se liquidan de acuerdo con
              el resultado del partido (o un determinado juego). La puntuación no se actualizará para los mercados de
              tenis en juego.</div>
            <div class="col-12 modal-rules-content pt-4">5.1.9 La mayoría de las apuestas de Aces (faltas dobles, etc.) se
              liquidan según las estadísticas oficiales de los partidos. Todas las apuestas serán ANULADAS si no se ha
              completado un partido debido a la jubilación o descalificación de un jugador.</div>
            <div class="col-12 modal-rules-content pt-4">5.1.10 La mayoría de los mercados de Aces (faltas dobles, etc.)
              se liquidan según las estadísticas oficiales de partidos. Todas las apuestas serán ANULADAS si no se ha
              completado un partido debido al abandono o descalificación de un jugador.</div>
            <div class="col-12 modal-rules-content pt-4">5.1.11 Los mercados de Ganadores de Juegos se relacionan con el
              ganador de un juego determinado, por ejemplo, Set 1 Game 1; Set 1 Game 2, etc. Si un set va a un tie-break,
              el mercado se designará como Set 1 TB; Establezca 2 TB, etc. Si hay un abandono / descalificación durante un
              evento incompleto, todas las apuestas se considerarán nulas. Si el árbitro completa un juego que da un
              'juego de penalización', todas las apuestas en ese juego se considerarán nulas (sin embargo, si el juego se
              completa con un 'punto de penalización', todas las apuestas aún se considerarán válidas). Si se suspende un
              juego, todas las apuestas aún se consideran válidas si el juego se completa posteriormente.</div>
            <div class="col-12 font-weight-bold modal-rules-title pt-5">6. Fútbol Americano</div>
            <div class="col-12 modal-rules-content pt-4">6.1 Tiempo mínimo para la validez de la apuesta.</div>
            <div class="col-12 modal-rules-content pt-4">Para apuestas válidas, los ganadores y los perdedores se deciden
              de acuerdo con el puntaje final (incluidos los tiempos extras), siempre que hayan transcurrido al menos 55
              minutos del juego.</div>
            <div class="col-12 modal-rules-content pt-4">6.1.2 Si un juego se suspende después del minuto 55 y no se
              reanuda ese mismo día, independientemente de que el juego se complete en otra fecha, las apuestas se
              liquidarán según el resultado del juego en el momento de la interrupción.</div>
            <div class="col-12 modal-rules-content pt-4">6.1.3 Si un evento se suspende antes del minuto 55 y no se
              reanuda ese mismo día, todas las apuestas realizadas en el juego completo se marcarán como 'no válidas' y se
              reembolsarán todas las apuestas. Si se ha completado parte del juego (es decir, primer cuarto, primera
              mitad, segundo cuarto o tercer cuarto), esas apuestas se marcarán como 'válidas' siempre que se haya
              completado todo el período.</div>
            <div class="col-12 modal-rules-content pt-4">6.2. Reglas adicionales</div>
            <div class="col-12 modal-rules-content pt-4">6.2.1 Todas las apuestas en el juego y todas las apuestas en la
              segunda mitad incluirán puntaje en tiempo extra.</div>
            <div class="col-12 modal-rules-content pt-4">6.2.2 Las apuestas realizadas en el cuarto cuarto no incluirán
              ningún puntaje del tiempo extra.</div>
            <div class="col-12 modal-rules-content pt-4">6.2.3 A menos que se especifique antes del inicio del partido,
              siempre que el evento se juegue en el día programado, todas las apuestas se marcarán como 'válidas'. Además,
              si el mal tiempo (o un retraso de este tipo) mueve la hora de inicio después de la medianoche hora local,
              pero el juego todavía se juega, entonces todas las apuestas se marcan como 'válidas'. Si el juego es
              reprogramado, todas las apuestas serán canceladas.</div>
            <div class="col-12 modal-rules-content pt-4">6.2.4 En NFL y College Football, un teaser de dos equipos que
              resulta en Tie/Win, Tie/Loss o Tie/Tie se considera un empate y todas las apuestas son reembolsadas.</div>
            <div class="col-12 modal-rules-content pt-4">6.2.5 En Arena Football, cualquier teaser que resulte con un
              empate se contabiliza como una pérdida. La propuesta de apuestas 'Away (visitante) Points / Home (local)
              Points' de la NFL se refiere a todos los juegos que se jugaron en una semana determinada de la NFL, que
              incluye todos los juegos que se juegan de jueves a lunes.</div>
            <div class="col-12 modal-rules-content pt-4">6.2.6 En un evento que termine en empate (empate) como resultado
              final: las apuestas en cualquiera de los equipos se reembolsarán.</div>
            <div class="col-12 modal-rules-content pt-4">6.2.7 El sitio web también ofrece otra opción de apuestas: la
              línea de tres vías con el sorteo es la tercera opción de apuestas, de modo que cuando el resultado es un
              empate, solo se considerarán aquellas apuestas colocadas en el empate como el resultado final ganador. Los
              que apostaron a un equipo o un jugador para ganar, perderán sus apuestas.</div>
            <div class="col-12 modal-rules-content pt-4">6.3 Total de equipo más alto / más bajo</div>
            <div class="col-12 modal-rules-content pt-4">6.3.1 Las apuestas en el Total de equipo más alto o en el Total
              de equipo más bajo se considerarán válidas solo si los juegos se juegan en las fechas programadas y en los
              lugares programados, como se indica en el sitio web.</div>
            <div class="col-12 modal-rules-content pt-4">6.3.2 Si los equipos están empatados con el mayor número de
              victorias, el ganador será considerado el equipo con el mayor margen de anotaciones (menos goles anotados
              por el rival). Si los márgenes ganadores también son iguales, todas las apuestas en los equipos empatados se
              considerarán ganadoras.</div>
            <div class="col-12 modal-rules-content pt-4">6.3.3 Si los equipos están empatados con el total más bajo del
              equipo, el ganador será el equipo con el mayor margen de pérdida (la mayoría de los puntos anotados por la
              oposición). Si los márgenes perdedores también son iguales, todas las apuestas en los equipos empatados se
              considerarán ganadoras.</div>
            <div class="col-12 modal-rules-content pt-4">6.4 Temporada de fútbol universitario reglas válidas</div>
            <div class="col-12 modal-rules-content pt-4">6.4.1 Los partidos de Bowl y los partidos de campeonato de
              conferencia no se cuentan para el total de victorias de temporada de los equipos, solo los partidos de
              temporada regular.</div>
            <div class="col-12 modal-rules-content pt-4">6.4.2 Los equipos deben jugar todos los partidos programados de
              la temporada regular para que las apuestas tengan validez.</div>
            <div class="col-12 modal-rules-content pt-4">6.5 NCAA Football Conference Championship Futuras Reglas</div>
            <div class="col-12 modal-rules-content pt-4">6.5.1. Si la conferencia tiene un juego de campeonato oficial, se
              considera que el ganador del juego de campeonato es el ganador de esa conferencia.</div>
            <div class="col-12 modal-rules-content pt-4">6.5.2. Si la conferencia tiene co-campeones, el primer equipo
              seleccionado por el BCS se considera el ganador, y todos los demás equipos se consideran perdedores. Si una
              conferencia tiene co-campeones, y el BCS no elige ningún equipo, todas las apuestas del equipo se marcarán
              como 'No válidas' y se reembolsarán.</div>
            <div class="col-12 modal-rules-content pt-4">6.5.3. Para las cuotas dentro de las conferencias, el equipo que
              participa en el juego de campeonato de la conferencia será considerado el ganador de esa división.</div>
            <div class="col-12 modal-rules-content pt-4">6.6. Puntales para el número de jugadores diferentes para anotar
            </div>
            <div class="col-12 modal-rules-content pt-4">6.6.1. Para propósitos de apuestas, se contabilizarán los
              touchdowns, las conversiones de 2 puntos, los puntos de campo y los PAT.</div>
            <div class="col-12 modal-rules-content pt-4">6.6.2. Una seguridad no será contada.</div>
            <div class="col-12 modal-rules-content pt-4">6.6.3. Para una distancia mayor (Más de) o menor (Menos de) del
              primer pase de touchdown de un mariscal de campo, debe lanzar un pase de touchdown para que la apuesta tenga
              acción.</div>
            <div class="col-12 modal-rules-content pt-4">6.6.4. Un tiro libre después de un safety no se considera un
              despeje para ningún elemento, independientemente de cómo se ejecute el tiro libre.</div>
            <div class="col-12 modal-rules-content pt-4">6.7. Mercados semanales de la NFL</div>
            <div class="col-12 modal-rules-content pt-4">6.7.1. En los mercados semanales de la NFL, un número de semana
              se define según el programa que figura en NFL.com. Para mercados de apuestas, todos los partidos en la
              semana específica se incluyen para mercados semanales.</div>
            <div class="col-12 modal-rules-content pt-4">6.7.2. Si cualquier partido en la semana mencionada se cancela o
              se pospone, y no se completa dentro de las 96 horas de su hora de inicio programada, todas las apuestas de
              mercados semanales serán nulas (independientemente del resultado de cualquier juego específico).</div>
            <div class="col-12 modal-rules-content pt-4">6.7.3. Para ser considerado válido en los mercados de la NFL o
              NCAA, los juegos asociados deben jugarse en la fecha programada y en el sitio programado.</div>
            <div class="col-12 font-weight-bold modal-rules-title pt-5">7. Balonmano</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">7.1 Reglas del balonmano</div>
            <div class="col-12 modal-rules-content pt-4">7.1.1 Todas las apuestas, incluidas las apuestas en vivo, se
              liquidan de acuerdo con el puntaje del juego al final del tiempo regular. (El tiempo extra y las
              penalizaciones no cuentan).</div>
            <div class="col-12 modal-rules-content pt-4">7.1.2 Si un partido se pospone, suspende o abandona y no se
              reanuda dentro de las doce horas posteriores a la hora de inicio programada, todas las apuestas se
              considerarán nulas, excepto las apuestas realizadas en mercados que se hayan resuelto. Las apuestas también
              se considerarán válidas si el organismo de gobierno pertinente declara un puntaje oficial.</div>
            <div class="col-12 modal-rules-content pt-4">7.1.3 Todas las apuestas de Handball In-play se liquidarán al
              final del tiempo regular.</div>
            <div class="col-12 modal-rules-content pt-4">7.1.4 La puntuación no se actualizará para los mercados de
              balonmano en juego.</div>
            <div class="col-12 font-weight-bold modal-rules-title pt-5">8. Voleibol y Voleibol de Playa</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">8.1 Reglas de voleibol y voley playa</div>
            <div class="col-12 modal-rules-content pt-4">8.1.1 Las apuestas de mercado relacionadas al ganador de un
              evento o de un set. Las apuestas de hándicap se basan en sets o puntos (relacionados con el nombre del
              mercado); Mercados Más de / Menos de y Pares / Impares basados &#8203;&#8203;en puntos (a menos que se
              especifique lo contrario).</div>
            <div class="col-12 modal-rules-content pt-4">8.1.2 Si un equipo no comienza un torneo o un partido, todas las
              apuestas en ese mismo equipo se considerarán nulas.</div>
            <div class="col-12 modal-rules-content pt-4">8.1.3 Si un equipo se retira o es descalificado durante un
              partido, todas las apuestas se anularán, excluyendo las apuestas en mercados que ya se han resuelto.</div>
            <div class="col-12 modal-rules-content pt-4">8.1.4 Si un evento se suspende o se abandona, todas las apuestas
              siguen siendo válidas si el partido se reanuda dentro de un período de 12 horas.</div>
            <div class="col-12 modal-rules-content pt-4">8.1.5 Ganador del primer set (Ganador del segundo, tercer set,
              etc.) se refiere al resultado del set especificado. Todas las apuestas se considerarán nulas si el set
              especificado no se completa.</div>
            <div class="col-12 modal-rules-content pt-4">8.1.6 Los mercados de voleibol en vivo se liquidan de acuerdo con
              el resultado final del partido (o cierto set). La puntuación no se actualizará para los mercados de voleibol
              en vivo.</div>
            <div class="col-12 font-weight-bold modal-rules-title pt-5">9. Futsal</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">9.1 Reglas generales de Futsal</div>
            <div class="col-12 modal-rules-content pt-4">9.1.1 Todas las apuestas se liquidarán según el resultado de 2X20
              minutos completos de juego, a menos que se indique lo contrario. Tiempo extra y penales no cuentan.</div>
            <div class="col-12 modal-rules-content pt-4">9.1.2 Si un partido se pospone, o se suspende y no se reanuda el
              mismo día, todas las apuestas se considerarán nulas.</div>
            <div class="col-12 modal-rules-content pt-4">9.1.3 Si un evento comienza antes de la hora de inicio
              programada, solo las apuestas realizadas antes del inicio real se reconocerán como válidas. Todas las
              apuestas realizadas después del inicio se considerarán nulas, excluyendo las apuestas en los mercados en
              vivo.</div>
            <div class="col-12 modal-rules-content pt-4">9.2 Clausura y discontinuación.</div>
            <div class="col-12 modal-rules-content pt-4">9.2.1 Todas las apuestas en equipos que participan en un partido
              que ha sido suspendido o abandonado se considerarán nulas.</div>
            <div class="col-12 font-weight-bold modal-rules-title pt-5">10. Béisbol</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">10.1 Reglas generales de béisbol</div>
            <div class="col-12 modal-rules-content pt-4">10.1.1 Al apostar en mercados totales (Más de / Menos de), el
              juego debe llegar a 9 entradas (8.5 si el equipo local está adelantado) para que las apuestas se consideren
              válidas. Si se abandona o se suspende un juego en entradas adicionales, el resultado se decidirá
              posteriormente a la última entrada completa, con excepción de los casos en los que el equipo de casa anota
              el empate, o adquiere el liderato en la mitad inferior de la entrada, en esa ocasión el resultado se decide
              en el momento en que se llama el juego.</div>
            <div class="col-12 modal-rules-content pt-4">10.1.2 Las apuestas realizadas en carreras totales se
              reembolsarán si se produce un cambio de lanzador antes de que los dos lanzadores listados logren lanzar al
              menos un lanzamiento.</div>
            <div class="col-12 modal-rules-content pt-4">10.1.3 Las reglas para apuestas de Línea de corrida y Línea de
              corrida alternativa son idénticas a las de los totales de béisbol.</div>
            <div class="col-12 modal-rules-content pt-4">10.1.4 El resultado de un evento se convierte en oficial,
              posteriormente a 5 entradas de juego, excepto en los casos en que el equipo local esté siguiendo la
              iniciativa luego de 4.5 entradas. Si se abandona o se suspende un evento, el ganador se decide por el
              resultado posterior a la última entrada completa, excepto en los casos en que el equipo local anota el
              empate, o adquiere la ventaja en la mitad inferior de la entrada, en cuyo caso el ganador Se decide por el
              resultado en el momento en que se llama el juego. El valor de la apuesta se reembolsará si el equipo local
              empata el juego y luego se suspende. Los eventos no se postergarán al día siguiente a menos que se haya
              declarado de manera diferente.</div>
            <div class="col-12 modal-rules-content pt-4">10.1.5 El sitio web no reconoce los juegos que han sido
              suspendidos o con líneas mal establecidas. Mientras que el juego tiene lugar en la fecha redefinida, todas
              las apuestas se consideran válidas. Si un mal clima (o una demora causada por razones similares) hace que la
              hora de inicio sea posterior a la hora local de medianoche, pero el juego todavía se lleva a cabo, todas las
              apuestas se consideran válidas. Si el evento es reprogramado, todas las apuestas serán canceladas.</div>
            <div class="col-12 modal-rules-content pt-4">10.1.6 En el caso de un playoff reprogramado: para un evento que
              se iniciará nuevamente en un período de tiempo de 96 horas posterior a su postergación. Todas las apuestas
              se considerarán válidas y se resolverán una vez finalizado el evento. Si el juego no se termina dentro de
              las 96 horas posteriores a la reprogramación, entonces todas las apuestas no son válidas.</div>
            <div class="col-12 modal-rules-content pt-4">10.1.7 Las apuestas en el béisbol se aceptarán de la siguiente
              manera.</div>
            <div class="col-12 modal-rules-content pt-4">10.1.7.1 Acción - Equipo contra equipo, sin importar los
              lanzadores abridores.</div>
            <div class="col-12 modal-rules-content pt-4">10.1.7.2 Lanzadores listados: si los dos lanzadores iniciales no
              son exactamente como se indicaron en el momento de la apuesta, la apuesta se considerará como 'No válida'.
            </div>
            <div class="col-12 modal-rules-content pt-4">0.1.7.3 Un lanzador listado - esta es una apuesta a favor o en
              contra de un lanzador determinado, con respecto al otro lanzador inicial. Si el lanzador no se presenta, la
              apuesta se considera como 'No válida'. (Por ejemplo: 'Los Tigres contra los Mellizos' indican una apuesta
              contra los Mellizos. 'Los Mellizos contra los Tigres' indican una apuesta a los Mellizos).</div>
            <div class="col-12 modal-rules-content pt-4">10.1.7.4 En el caso de que haya un cambio de lanzador antes del
              inicio del evento, la línea se corregirá y las apuestas en curso serán ajustadas utilizando la cuota de
              apertura para el nuevo lanzador.</div>
            <div class="col-12 modal-rules-content pt-4">10.1.7.5 Un lanzador se considera un abridor después de haber
              lanzado el primer lanzamiento al primer bateador oponente. </div>
            <div class="col-12 modal-rules-content pt-4">10.1.7.6 Las apuestas sobre totales y líneas de carrera siempre
              deben definir los dos lanzadores listados.</div>
            <div class="col-12 modal-rules-content pt-4">10.1.7.7 Encabezados dobles: los juegos de doble encabezado se
              indican como Juego 1 o Juego 2. Los miembros pueden listar lanzadores en un doble encabezado; Sin embargo,
              las apuestas son aceptadas en los juegos, no en los lanzadores. Si un lanzador programado no participa en su
              evento programado de doble cabecera, pero en el otro evento, las apuestas se estiman basándose en el Juego,
              no en el lanzador.</div>
            <div class="col-12 modal-rules-content pt-4">10.1.7.8 En el caso de que se llame a una regla de ejecución
              anticipada o de misericordia, los eventos se considerarán finalizados. Las apuestas de juegos en líneas de
              carrera, totales, totales de equipo y las líneas se considerarán válidas.</div>
            <div class="col-12 modal-rules-content pt-4">10.2 MLB Regular Season Wins Más de / Menos de</div>
            <div class="col-12 modal-rules-content pt-4">10.2.1 Un equipo de béisbol debe haber jugado al menos 160 juegos
              para que las apuestas en sus victorias de temporada sean consideradas válidas.</div>
            <div class="col-12 modal-rules-content pt-4">10.2.2 A efectos de estimación, no se contabilizarán juegos extra
              de desempate por comodín o división hacia el total de victorias de la temporada.</div>
            <div class="col-12 modal-rules-content pt-4">10.3 Apuestas en la primera mitad (5 entradas):</div>
            <div class="col-12 modal-rules-content pt-4">10.3.1 Todas las apuestas en la primera mitad de béisbol (5
              entradas) se definirán de acuerdo con el resultado al final de cinco entradas completas.</div>
            <div class="col-12 modal-rules-content pt-4">10.3.2 Si un juego no llega a cinco entradas completas, todas las
              apuestas de la primera mitad (5 entradas) se cancelarán.</div>
            <div class="col-12 modal-rules-content pt-4">10.3.3 Una vez que se hayan completado cinco entradas completas,
              todas las apuestas en la primera mitad (5 entradas) serán válidas.</div>
            <div class="col-12 modal-rules-content pt-4">10.3.4 Todas las apuestas de la primera mitad (5 entradas) deben
              enumerar ambos lanzadores. Si alguno de los lanzadores mencionados no se inicia, las apuestas en la primera
              mitad (5 entradas) serán canceladas.</div>
            <div class="col-12 modal-rules-content pt-4">10.4 Gran Salami de Béisbol</div>
            <div class="col-12 modal-rules-content pt-4">10.4.1 El Gran Salami de Béisbol se determinará por el total de
              carreras anotadas en todos los eventos de Grandes Ligas programados para ese día.</div>
            <div class="col-12 modal-rules-content pt-4">10.4.2 Todos los eventos programados deben llegar a al menos 9
              entradas (8.5 si el equipo local está a la cabeza). Si cualquiera de los eventos programados se cancela o se
              detiene antes de completar sus 8.5 entradas, se cancelarán todas las apuestas en el Baseball Grand Salami.
            </div>
            <div class="col-12 modal-rules-content pt-4">10.4.3 No se incluirán lanzadores para el Gran Salami; Todas las
              apuestas se considerarán válidas sin tener en cuenta a los lanzadores abridores.</div>
            <div class="col-12 modal-rules-content pt-4">10.5 Ligas menores de la MLB</div>
            <div class="col-12 modal-rules-content pt-4">10.5.1 En el doble encabezado se juega entre el Equipo A y el
              Equipo B y Kaya75 publica una recompensa para el Equipo A contra el Equipo B por un solo juego, sin marcar
              esto como Juego 1 o Juego 2, esto se considerará como una recompensa en el juego 1. Si en realidad el juego
              1 ya ha comenzado, se considerará que es el juego 2.</div>
            <div class="col-12 font-weight-bold modal-rules-title pt-5">11. Hockey sobre Hielo</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">11.1 Reglas de hockey sobre hielo</div>
            <div class="col-12 modal-rules-content pt-4">11.1.1 Todas las apuestas se liquidan de acuerdo con el tiempo
              regular solo sin tener en cuenta los tiempos extras o las penalizaciones.</div>
            <div class="col-12 modal-rules-content pt-4">11.1.2 Si un mercado de apuestas incluye tiempo extra, se
              indicará claramente en la oferta de apuesta y se indicará claramente en el boleto. Por favor revise su
              boleto con precaución adicional.</div>
            <div class="col-12 modal-rules-content pt-4">11.1.3 Los tiros de penal se consideran explícitamente como parte
              de las horas extras. Si se produce un tiro penal, el ganador recibirá un gol adicional.</div>
            <div class="col-12 modal-rules-content pt-4">11.1.4 Tiempo mínimo para la acción: los juegos deben pasar un
              mínimo de 55 minutos para que las apuestas sean válidas. Si se suspende un juego antes de que se hayan
              jugado 55 minutos completos, se reembolsarán todas las apuestas sobre el resultado del juego.</div>
            <div class="col-12 modal-rules-content pt-4">11.1.5 Tiempo mínimo para la acción en los períodos: el período
              en cuestión debe jugarse en su totalidad para que las apuestas sean válidas. De lo contrario, se
              reembolsarán todas las apuestas realizadas en el período. Los goles, anotados durante el tiempo extra o los
              penales, no se consideran para las apuestas realizadas en el 3er período.</div>
            <div class="col-12 modal-rules-content pt-4">11.1.6 'Goles locales contra goles visitante' y Gran Salami: Los
              'Goles locales contra goles visitante' y Gran Salami se definirán por la cantidad total de goles anotados en
              todos los juegos programados en la liga determinada para ese día. Todos los juegos programados deben jugarse
              durante tres períodos completos. Si cualquier juego programado se cancela o se suspende antes de que se
              completen tres períodos completos, todas las apuestas en los mercados 'Goles locales contra goles visitante'
              y el Gran Salami se anularán.</div>
            <div class="col-12 font-weight-bold modal-rules-title pt-5">12. Hockey</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">12.1 Reglas Hockey</div>
            <div class="col-12 modal-rules-content pt-4">12.1.1. Todas las apuestas, incluidas las apuestas en juego, se
              liquidan de acuerdo con el puntaje final al final del tiempo regular. El tiempo extra, gol dorado y penales
              no se incluyen en las apuestas a tiempo completo a menos que se indique lo contrario. (Los mercados
              específicos para tiempo extra (ET) y penales (PEN) pueden estar disponibles para apostar).</div>
            <div class="col-12 modal-rules-content pt-4">12.1.2 Si un evento se pospone, se suspende o se suspende y no se
              reanuda dentro de un período de doce horas de la hora de inicio programada, todas las apuestas se anularán,
              excluyendo aquellas en mercados que se hayan resuelto. Las apuestas también se considerarán válidas si el
              puntaje oficial es determinado por el organismo oficial correspondiente.</div>
            <div class="col-12 modal-rules-content pt-4">12.1.3 Los mercados de la primera mitad se relacionan con el
              resultado de la primera mitad. Todas las apuestas se anularán si no se completa la primera mitad.</div>
            <div class="col-12 font-weight-bold modal-rules-title pt-5">13. Liga de rugby</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">13.1 Liga de rugby</div>
            <div class="col-12 modal-rules-content pt-4">13.1.1. A menos que se indique lo contrario, todas las apuestas a
              tiempo completo, incluidas las apuestas en juego, se liquidan en función de los 80 minutos de juego
              (incluido el tiempo de detención agregado por el árbitro), pero se excluye el tiempo extra.</div>
            <div class="col-12 modal-rules-content pt-4">13.1.2 Si se suspende un partido en cualquier momento antes de
              que se jueguen 80 minutos, y no se reanuda dentro de las 12 horas posteriores a la hora de inicio
              programada, todas las apuestas del partido se considerarán nulas, excluyendo las apuestas que se hayan
              resuelto. Todas las apuestas se considerarán válidas también en el caso en que el organismo oficial de
              gobierno determine el resultado final del juego.</div>
            <div class="col-12 modal-rules-content pt-4">13.1.3 Los mercados de la primera mitad se relacionan solo con el
              resultado de la primera mitad solamente. Todas las apuestas se anularán si no se completa la primera mitad.
            </div>
            <div class="col-12 font-weight-bold modal-rules-title pt-5">14. Rugby Union</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">14.1 Reglas de la Rugby Union</div>
            <div class="col-12 modal-rules-content pt-4">14.1.1 A menos que se indique lo contrario, todas las apuestas a
              tiempo completo, incluidas las apuestas en juego, se liquidan en función del resultado final al final del
              juego (incluido el tiempo de detención agregado por el árbitro) y el tiempo extra.</div>
            <div class="col-12 modal-rules-content pt-4">14.1.2 Si un partido se suspende en cualquier momento antes de
              que se jueguen 80 minutos, y no se reanuda dentro de las 12 horas posteriores a la hora de inicio
              programada, todas las apuestas del partido se considerarán nulas, excluyendo las apuestas que se hayan
              resuelto. Todas las apuestas se considerarán válidas también en el caso en que el organismo oficial
              correspondiente determine el resultado final del juego.</div>
            <div class="col-12 modal-rules-content pt-4">14.1.3 Los mercados de la primera mitad se relacionan solo con el
              resultado de la primera mitad solamente. Todas las apuestas se anularán si no se completa la primera mitad.
            </div>
            <div class="col-12 modal-rules-content pt-4">14.1.4 Se pueden ofrecer mercados adicionales (por ejemplo,
              incluyendo Tiempo extra o Shootout Winner) y los términos de estos mercados se informarán en el título.
            </div>
            <div class="col-12 modal-rules-content pt-4">Nota: Los tiempos extras no se jugarán durante los partidos de
              grupo de la ronda precursora, por lo que los empates son factibles.</div>
            <div class="col-12 font-weight-bold modal-rules-title pt-5">15. Tenis de Mesa</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">15.1 Reglas del tenis de mesa</div>
            <div class="col-12 modal-rules-content pt-4">15.1.1 Los mercados que se refieren al ganador del partido o set
              determinado. Los mercados de hándicap se basan en sets o puntos (por favor leer el título del mercado); Los
              mercados Más de / Menos de e Impar / Par se basan en puntos (a menos que se indique lo contrario).</div>
            <div class="col-12 modal-rules-content pt-4">15.1.2 Si un jugador no comienza un torneo o un partido, todas
              las apuestas de ese jugador serán canceladas.</div>
            <div class="col-12 modal-rules-content pt-4">15.1.3 Si un jugador (o pareja) se retira o es descalificado
              durante un evento, todas las apuestas serán canceladas, excluyendo aquellas en mercados que se hayan
              resuelto.</div>
            <div class="col-12 modal-rules-content pt-4">15.1.4 Si un evento se pospone o se suspende, todas las apuestas
              seguirán siendo válidas si el partido comienza nuevamente antes de que finalice el período de doce horas.
            </div>
            <div class="col-12 modal-rules-content pt-4">15.1.5 Ganador del primer set (Ganador del segundo, tercer set,
              etc.) se refiere al resultado del set determinado. Todas las apuestas se anularán si el set determinado no
              se termina.</div>
            <div class="col-12 font-weight-bold modal-rules-title pt-5">16. Boxeo</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">16.1 Reglas de boxeo</div>
            <div class="col-12 modal-rules-content pt-4">16.1.1 Cuando suene la campana para comenzar el primer round, la
              pelea se considerará oficial para las apuestas, independientemente de la duración programada o el título.
            </div>
            <div class="col-12 modal-rules-content pt-4">16.1.2 Si se modifica el número de rounds programadas en una
              pelea, las siguientes apuestas serán válidas: ganador de la pelea, peleador ganador y las opciones de
              empate. Los mercados de pelea contra totales y Voluntad o No se considerarán válidas, si el número
              actualizado de rounds programados es mayor que el total listado en la prop. Las apuestas para el round
              exacto de finalización, el luchador para ganar por nocaut, el nocaut técnico, la descalificación, la
              victoria por decisión o la decisión técnica y la distancia se contabilizarán como ninguna acción si las
              rondas programadas se cambian o se publican incorrectamente.</div>
            <div class="col-12 modal-rules-content pt-4">16.1.3 Una pelea es un empate técnico cuando termina antes de que
              se complete el número asignado de rondas. Esto suele ser debido a un cabezazo o falta accidental.</div>
            <div class="col-12 modal-rules-content pt-4">16.1.4 Para mercados de apuestas, una apuesta a un luchador para
              ser el ganador 'Inside Distance' gana si el luchador elegido gana por KO, TKO, DQ, o una decisión técnica.
            </div>
            <div class="col-12 modal-rules-content pt-4">16.1.5 Para mercados de apuestas, una apuesta a un luchador para
              ser el ganador por 'KO' gana si el luchador elegido gana por KO, TKO o DQ.</div>
            <div class="col-12 modal-rules-content pt-4">16.1.6 Cualquier pelea que se considere 'no disputada' tendrá
              todas las apuestas reembolsadas.</div>
            <div class="col-12 modal-rules-content pt-4">16.1.7 Si la oferta de apuestas en un evento cuenta el empate
              como una tercera opción y el evento finaliza con un empate, se pagarán las apuestas al empate y se perderán
              otras apuestas a ganador de ambos peleadores. Si la oferta de apuestas cuenta solo con los dos boxeadores,
              ya que el empate no se ofrece o se ofrece como una mercado por separado, y el evento termina con un empate,
              las apuestas a cualquiera de los peleadores serán reembolsadas</div>
            <div class="col-12 modal-rules-content pt-4">16.1.8. Un mercado Más de / Menos de (total) en una pelea
              consiste en la cantidad total de rounds completados. El punto medio de una round es exactamente un minuto y
              treinta segundos en un round de tres minutos. Por lo tanto, 9½ rounds serían un minuto y treinta segundos de
              la décima ronda. El punto medio de una ronda de dos minutos se encuentra en la marca de un minuto. El punto
              medio de una ronda de cinco minutos se encuentra en la marca de dos minutos y treinta segundos.</div>
            <div class="col-12 modal-rules-content pt-4">16.1.9 Los resultados se determinarán sobre la base de la
              puntuación oficial en ringside. Los resultados no son oficiales para mercados de apuestas hasta que sean
              autenticados por los oficiales en el lugar de combate. Los organismos oficiales o no oficiales que anulen la
              decisión de una pelea fundada en una apelación, suspensión, demanda, resultado de una prueba de drogas o
              cualquier otra sanción de combate no se considerarán para fines de apuestas.</div>
            <div class="col-12 modal-rules-content pt-4">16.1.10 A menos que se indique lo contrario, los eventos deben ir
              dentro de los treinta días de la fecha programada para que las apuestas se consideren válidas.</div>
            <div class="col-12 modal-rules-content pt-4">16.1.11 En los casos en que no se mencionan las reglas
              anteriores, la decisión de apuestas que figura en el sitio web del Servicio de información deportiva se
              considerará oficial y vinculante.</div>
            <div class="col-12 font-weight-bold modal-rules-title pt-5">17. Snooker and Pool</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">17.1 Snooker and Pool</div>
            <div class="col-12 modal-rules-content pt-4">17.1. Los mercados de línea y de hándicap se refieren al ganador
              del partido. Los mercados Más de / Menos de e Impar / Par se basan en el número de triángulos de billar /
              racks (a menos que se indique lo contrario).</div>
            <div class="col-12 modal-rules-content pt-4">17.1. 2 Si un jugador no comienza un torneo o un partido, todas
              las apuestas de ese jugador serán canceladas.</div>
            <div class="col-12 modal-rules-content pt-4">17.1.3 Si un evento comienza pero no se termina, todas las
              apuestas se anularán, excluyendo aquellas en mercados que se hayan resuelto.</div>
            <div class="col-12 modal-rules-content pt-4">17.1.4 Para los mercados de tiempos individuales Los mercados Más
              de / Menos de y Pares / Impares se relacionan con el número total de puntos anotados en ese mismo tiempo.
            </div>
            <div class="col-12 font-weight-bold modal-rules-title pt-5">18. Golf</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">18.1 Reglas generales de golf.</div>
            <div class="col-12 modal-rules-content pt-4">18.1.1. Si el inicio de una ronda se pospone, o si se suspende el
              juego durante una ronda, todas las apuestas pendientes permanecerán válidas durante 48 horas. Si la
              reprogramación continúa por más de 48 horas, todas las apuestas pendientes se cancelarán y los montos de la
              apuesta se reembolsarán.</div>
            <div class="col-12 modal-rules-content pt-4">18.1.2. Las apuestas realizadas a un golfista que no participa en
              el torneo se definen como No válidas, y todas las apuestas serán reembolsadas.</div>
            <div class="col-12 modal-rules-content pt-4">18.1.3. Se considera que un jugador de golf ha jugado una vez que
              él o ella se ha retirado. En el caso de que un jugador se retire después de haberse retirado, las apuestas
              de ese jugador se considerarán perdidas.</div>
            <div class="col-12 modal-rules-content pt-4">18.1.4. Las apuestas se liquidarán según el torneo oficial y los
              resultados del partido (incluido el puntaje final correcto del partido y las apuestas individuales). Esto
              implica un juego que termina prematuramente, ya sea por acuerdo de los jugadores o debido a una lesión.
            </div>
            <div class="col-12 modal-rules-content pt-4">18.2 Apuestas directas (Ganador del torneo)</div>
            <div class="col-12 modal-rules-content pt-4">El 'Field' involucra a todos los jugadores no listados por
              nombre.</div>
            <div class="col-12 modal-rules-content pt-4">18.2.1 Todas las apuestas directas se liquidan según el jugador
              que gane el trofeo. Se considera el resultado de los play-offs.</div>
            <div class="col-12 modal-rules-content pt-4">18.2.2 Si un torneo no se despliega a la cantidad especificada de
              hoyos completados (básicamente 72) y los oficiales del torneo lo cortan, el líder al final de la cantidad de
              hoyos determinada por los oficiales será el ganador, a menos que haya un juego adicional o solo una parte de
              una ronda finalizada posteriormente a una apuesta que se haya realizado, en cuyo caso se considerará la
              cancelación de dicha apuesta.</div>
            <div class="col-12 modal-rules-content pt-4">18.2.3 En el caso de que dos o más golfistas estén empatados para
              el liderato al final del tiempo regular, generalmente se usa un desempate por muerte súbita para definir al
              ganador del torneo. En este caso, el ganador del playoff es el ganador para propósitos de apuestas. Todos
              los demás golfistas en el playoff serán determinados como finalistas de segundo lugar.</div>
            <div class="col-12 modal-rules-content pt-4">18.2.4 En caso de empate para una posición final, se considerará
              la posición de empate; por ejemplo, si cinco jugadores empatan en el quinto lugar, se considerará que los
              cinco terminaron en quinto lugar.</div>
            <div class="col-12 modal-rules-content pt-4">18.2.5 En la cantidad de torneos, los oficiales del torneo pueden
              hacer que las personas jueguen una cierta cantidad de hoyos de playoff para definir al ganador del torneo.
              En tales ocasiones, el golfista con el puntaje más bajo después de completar la cantidad designada de hoyos
              será el ganador, y todos los demás golfistas en el playoff serán determinados como finalistas de segundo
              lugar.</div>
            <div class="col-12 modal-rules-content pt-4">18.3 Enfrentamientos de golf</div>
            <div class="col-12 modal-rules-content pt-4">18.3.1 En los enfrentamientos de cabeza a cabeza, ambos golfistas
              deben jugar el primer partido para que las apuestas tengan acción.</div>
            <div class="col-12 modal-rules-content pt-4">18.3.2 Los jugadores están enfrentados solo para apostar. El
              jugador con el puntaje más bajo en todo el torneo se considera el ganador del partido.</div>
            <div class="col-12 modal-rules-content pt-4">18.3.3 Las apuestas se liquidarán en el jugador que logre la
              posición más alta al final del torneo. Si la cantidad de rondas jugadas ha disminuido, como en el caso de
              mal tiempo, las apuestas son válidas, siempre que se anuncie un ganador del torneo.</div>
            <div class="col-12 modal-rules-content pt-4">18.3.4 Si un jugador falla el golpe, se considera que el otro es
              el ganador. Si ambos jugadores fallan el golpe, el puntaje más bajo después de que se haya realizado el
              golpe definirá al ganador.</div>
            <div class="col-12 modal-rules-content pt-4">18.3.5 Si un jugador es descalificado o se retira, luego de su
              inicio en el evento, ya sea antes de completar dos rondas o después de que ambos jugadores hayan hecho su
              golpe, se considera que el otro jugador es el ganador.</div>
            <div class="col-12 modal-rules-content pt-4">18.3.6. Si un jugador es descalificado durante la tercera o la
              cuarta ronda, cuando el otro jugador en la apuesta del partido ya haya perdido el golpe, se considerará
              ganador al jugador descalificado.</div>
            <div class="col-12 font-weight-bold modal-rules-title pt-5">19. Bádminton</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">19.1 Reglas de bádminton.</div>
            <div class="col-12 modal-rules-content pt-4">19.1.1 Los mercados que se refieren al ganador del partido. Los
              mercados de hándicap se basan en sets o puntos (consulte el título del mercado); Mercados Más de / Menos de
              y Pares / Impares basados &#8203;&#8203;en puntos (a menos que se especifique lo contrario).</div>
            <div class="col-12 modal-rules-content pt-4">19.1.2 Si un jugador no comienza un torneo o un partido, todas
              las apuestas de ese jugador serán canceladas.</div>
            <div class="col-12 modal-rules-content pt-4">19.1.3 Todas las apuestas serán canceladas si un partido no se ha
              completado debido al abandono o descalificación de un jugador, excepto las apuestas que ya se han resuelto.
            </div>
            <div class="col-12 modal-rules-content pt-4">19.1.4 Si un evento se pospone o suspende, todas las apuestas aún
              se consideran válidas si el partido continúa dentro de las doce horas posteriores a la hora de inicio
              inicial.</div>
            <div class="col-12 modal-rules-content pt-4">19.1.5 Ganador del primer set (Ganador del segundo, tercer set,
              etc.) se refiere al resultado del set especificado. Todas las apuestas se considerarán nulas si el set
              especificado no está terminado.</div>
            <div class="col-12 modal-rules-content pt-4">19.1.6 Los mercados de apuestas al ganador, son apuestas que se
              refieren solo al ganador del evento (partido o set) ya que las apuestas de hándicap pueden basarse en puntos
              o sets. Las apuestas Más de / Menos de e Impar / Par se relacionan con los puntos del juego (si no se
              especifica lo contrario).</div>
            <div class="col-12 modal-rules-content pt-4">19.1.7 En caso de que un jugador no comience un partido o un
              torneo, todas las apuestas relacionadas con ese jugador se considerarán nulas.</div>
            <div class="col-12 modal-rules-content pt-4">19.1.8 En el caso de que un jugador o una pareja sea
              descalificado o no pueda terminar un juego, todas las apuestas, excluyendo las que ya se han determinado, se
              considerarán nulas.</div>
            <div class="col-12 modal-rules-content pt-4">19.1.9 En caso de que un juego se suspenda o se posponga, todas
              las apuestas se consideran válidas si el juego continúa dentro de las doce horas posteriores a su inicio
              original.</div>
            <div class="col-12 modal-rules-content pt-4">19.1.10 Primer / Segundo / Tercer set Las apuestas ganadoras se
              relacionan solo con el resultado del set específico. En caso de que el conjunto no se complete o no se
              inicie, todas las apuestas se considerarán nulas.</div>
            <div class="col-12 font-weight-bold modal-rules-title pt-5">Información sobre los tipos de apuestas</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">Apuestas en vivo</div>
            <div class="col-12 modal-rules-content pt-4">En nuestro sitio, puede encontrar una selección variada de
              eventos en juego en los que puede apostar. Nuestro sistema de apuestas en vivo, con muchos mercados, cuotas
              y actualizaciones en tiempo real, está diseñado para que al realizar una apuesta sea más fácil y más rápido,
              y le permite sentarse cómodamente en casa, ver el juego y ganar con tu buen conocimiento de los equipos.
              ¡Puedes hacer apuestas en cualquier momento mientras el juego está activo! Aquí puede encontrar todo lo que
              ha estado buscando en una casa de apuestas en línea, ¡únase ahora y disfrute de un nuevo mundo de
              posibilidades de apuestas en vivo!</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">Hándicap</div>
            <div class="col-12 modal-rules-content pt-4">El hándicap asiático (debe su nombre a sus orígenes orientales)
              es un término utilizado en el juego para nombrar un tipo de apuesta en el fútbol que ha adquirido
              popularidad a través del tiempo. Los handicaps cubren las apuestas desde un cuarto de gol a varios goles.
              Revela lo que parece ser un tipo de apuesta menos arriesgada, en comparación con el conocido estilo de
              apuestas 'ganador-empate-ganador'. Si se sabe por casualidad que un competidor es superior a otro, al más
              débil se le da una ventaja, que se une al resultado real. Un handicap asiático consiste en: la línea de
              handicap, que se relaciona con el término de la apuesta, y la línea de importe, que es la cantidad a pagar
              ofrecida en cada equipo para la línea de handicap dada - a una participación unitaria de uno.</div>
            <div class="col-12 modal-rules-content pt-4">Tipos de Hándicap</div>
            <div class="col-12 modal-rules-content pt-4">Hándicap 0</div>
            <div class="col-12 modal-rules-content pt-4">Usted gana si el equipo en el que hizo su apuesta gana el
              partido. Si el juego termina con en empate, obtienes un reembolso de tu apuesta.</div>
            <div class="col-12 modal-rules-content pt-4">Handicap +0.25</div>
            <div class="col-12 modal-rules-content pt-4">Usted gana si el equipo en el que hizo su apuesta gana el
              partido. Si el juego termina con un empate, su apuesta se divide en dos mitades: una mitad se considera una
              victoria, la otra mitad se considera un empate y sus apuestas se reembolsan.</div>
            <div class="col-12 modal-rules-content pt-4">Handicap +0.5</div>
            <div class="col-12 modal-rules-content pt-4">Tu apuesta gana si el equipo en el que hiciste tu apuesta empata
              o gana el partido.</div>
            <div class="col-12 modal-rules-content pt-4">Handicap +0.75</div>
            <div class="col-12 modal-rules-content pt-4">Usted gana si el equipo en el que hizo su apuesta gana o empata
              el partido. Si el equipo que eligió pierde con la diferencia de un gol, perderá el 50% de la cantidad que
              apostó.</div>
            <div class="col-12 modal-rules-content pt-4">Handicap +1</div>
            <div class="col-12 modal-rules-content pt-4">Usted gana si el equipo en el que hizo su apuesta gana o empata
              el partido. Si pierde con la diferencia de un gol, obtendrá un reembolso de su apuesta.</div>
            <div class="col-12 modal-rules-content pt-4">Handicap +1.25</div>
            <div class="col-12 modal-rules-content pt-4">Usted gana si el equipo en el que hizo su apuesta gana o empata
              el partido. Si pierde con una diferencia de un gol, su apuesta se divide en la mitad, una mitad se cuenta
              como una victoria, la otra mitad se cuenta como un empate y se reembolsa.</div>
            <div class="col-12 modal-rules-content pt-4">Handicap +1.5</div>
            <div class="col-12 modal-rules-content pt-4">Usted gana si el equipo en el que hizo su apuesta gana, empata o
              pierde el partido con una diferencia de un gol.</div>
            <div class="col-12 modal-rules-content pt-4">Handicap +1.75</div>
            <div class="col-12 modal-rules-content pt-4">Usted gana si el equipo en el que hizo su apuesta gana, empata o
              pierde el partido con una diferencia de un gol. Si pierde con una diferencia de dos goles, perderá el 50% de
              la participación que hizo.</div>
            <div class="col-12 modal-rules-content pt-4">Handicap +2</div>
            <div class="col-12 modal-rules-content pt-4">Usted gana si el equipo en el que hizo su apuesta gana, empata o
              pierde el partido con una diferencia de un gol. Si el equipo pierde con una diferencia de dos goles,
              obtendrás un reembolso de tu apuesta.</div>
            <div class="col-12 modal-rules-content pt-4">Handicap +2.25</div>
            <div class="col-12 modal-rules-content pt-4">Usted gana si el equipo en el que apostó gana, empata o pierde el
              partido con una diferencia de un gol. Si el equipo pierde con una diferencia de dos goles, su apuesta se
              divide en la mitad: una mitad se considera una victoria, la otra mitad se considera un empate y es
              reembolsada</div>
            <div class="col-12 modal-rules-content pt-4">Handicap +2.5</div>
            <div class="col-12 modal-rules-content pt-4">Usted gana si el equipo en el que apostó gana, empata o pierde el
              partido con una diferencia de menos de tres goles.</div>
            <div class="col-12 modal-rules-content pt-4">Handicap -0.25</div>
            <div class="col-12 modal-rules-content pt-4">Usted gana si el equipo al que apostó gana el partido con una
              diferencia de uno o más goles. Si el equipo empata, pierde el 50% de la apuesta.</div>
            <div class="col-12 modal-rules-content pt-4">Handicap -0.5</div>
            <div class="col-12 modal-rules-content pt-4">Usted gana si el equipo en el que hizo su apuesta gana el
              partido.</div>
            <div class="col-12 modal-rules-content pt-4">Handicap -0.75</div>
            <div class="col-12 modal-rules-content pt-4">Usted gana si el equipo al que apostó gana el partido con una
              diferencia de dos o más goles. Si el equipo gana con un solo gol, su apuesta se divide en la mitad, una
              mitad cuenta como victoria, la otra mitad cuenta como un empate y se reembolsa su participación.</div>
            <div class="col-12 modal-rules-content pt-4">Handicap -1</div>
            <div class="col-12 modal-rules-content pt-4">Usted gana si el equipo en el que hizo su apuesta gana el partido
              con una diferencia de dos o más goles. Si el equipo gana con un gol de diferencia, obtendrás un reembolso de
              tu apuesta.</div>
            <div class="col-12 modal-rules-content pt-4">Handicap -1.25</div>
            <div class="col-12 modal-rules-content pt-4">Usted gana si el equipo al que apostó gana el partido con una
              diferencia de dos o más goles. Si el equipo gana con un gol de diferencia, pierdes el 50% de tu apuesta.
            </div>
            <div class="col-12 modal-rules-content pt-4">Handicap -1.5</div>
            <div class="col-12 modal-rules-content pt-4">Usted gana si el equipo al que apostó gana el partido con una
              diferencia de dos o más goles.</div>
            <div class="col-12 modal-rules-content pt-4">Handicap -1.75</div>
            <div class="col-12 modal-rules-content pt-4">Usted gana si el equipo al que apostó gana el partido con una
              diferencia de tres o más goles. Si el equipo gana con una diferencia de dos goles, su apuesta se divide a la
              mitad, una mitad se cuenta como una victoria, la otra mitad se cuenta como un empate y se reembolsa.</div>
            <div class="col-12 modal-rules-content pt-4">Handicap -2</div>
            <div class="col-12 modal-rules-content pt-4">Usted gana si el equipo en el que hizo su apuesta gana el partido
              con una diferencia de tres o más goles. Si el equipo gana con una diferencia de dos goles, obtienes un
              reembolso de tu apuesta.</div>
            <div class="col-12 modal-rules-content pt-4">Handicap -2.25</div>
            <div class="col-12 modal-rules-content pt-4">Usted gana si el equipo al que apostó gana el partido con una
              diferencia de tres o más goles. Si el equipo gana con una diferencia de dos goles, pierdes el 50% de tu
              apuesta.</div>
            <div class="col-12 modal-rules-content pt-4">Handicap -2.5</div>
            <div class="col-12 modal-rules-content pt-4">Usted gana si el equipo al que apostó gana el partido con una
              diferencia de tres o más goles.</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">Más / Menos</div>
            <div class="col-12 modal-rules-content pt-4">Este tipo de apuesta le da a un jugador la posibilidad de apostar
              por el número de goles marcados en el partido y si estará por encima o por debajo de un número determinado.
            </div>
            <div class="col-12 modal-rules-content pt-4">Tipos de apuestas superiores / inferiores</div>
            <div class="col-12 modal-rules-content pt-4">Menos de 2</div>
            <div class="col-12 modal-rules-content pt-4">Todas las apuestas realizadas en 'Menos de 2' obtendrán un estado
              ganador si hay 1 o 0 goles, anotados en el juego. Si el partido termina con exactamente 2 goles, todas las
              apuestas deben ser reembolsadas. Si el partido termina con 3 o más goles, todas las apuestas tienen un
              estado perdedor.</div>
            <div class="col-12 modal-rules-content pt-4">Más de 2</div>
            <div class="col-12 modal-rules-content pt-4">Todas las apuestas realizadas en 'Más de 2' obtendrán un estado
              ganador si hay 3 o más goles marcados en el juego. Si el partido termina con exactamente 2 goles, todas las
              apuestas, deben ser reembolsadas. Si el partido termina con 1 o 0 goles, todas las apuestas tienen un estado
              perdedor.</div>
            <div class="col-12 modal-rules-content pt-4">Menos de 2.25</div>
            <div class="col-12 modal-rules-content pt-4">Todas las apuestas realizadas en 'Menos de 2.25' obtendrán un
              estado ganador si hay 1 o 0 goles marcados en el juego. Si el partido termina con exactamente 2 goles, la
              mitad de la apuesta ganará y la otra mitad será devuelta. Si el juego termina con 3 o más goles, todas las
              apuestas tienen un estado perdedor.</div>
            <div class="col-12 modal-rules-content pt-4">Más de 2.25</div>
            <div class="col-12 modal-rules-content pt-4">Todas las apuestas realizadas en 'Más de 2,25' obtendrán un
              estado ganador si hay 3 o más goles marcados en el juego. Si el partido termina con exactamente 2 goles, se
              devolverá la mitad de la apuesta y la otra mitad se perderá. Si el juego termina con 1 o 0 goles, todas las
              apuestas tienen un estado perdedor.</div>
            <div class="col-12 modal-rules-content pt-4">Menos de 2.5</div>
            <div class="col-12 modal-rules-content pt-4">Todas las apuestas realizadas en 'Menos de 2.5' obtendrán un
              estado ganador si hay 0, 1 o 2 goles marcados en el juego. Si el juego termina con 3 o más goles, todas las
              apuestas tienen un estado perdedor.</div>
            <div class="col-12 modal-rules-content pt-4">Más de 2.5</div>
            <div class="col-12 modal-rules-content pt-4">Todas las apuestas realizadas en 'Más de 2,5' obtendrán un estado
              ganador si hay 3 o más goles marcados en el juego. Si el juego termina con 0, 1 o 2 goles, todas las
              apuestas tienen un estado perdedor.</div>
            <div class="col-12 modal-rules-content pt-4">Menos de 2.75</div>
            <div class="col-12 modal-rules-content pt-4">Todas las apuestas realizadas en 'Menos de 2,75' obtendrán un
              estado ganador si hay 0, 1 o 2 goles marcados en el juego. Si el juego termina con exactamente 3 goles, se
              devolverá la mitad de la apuesta y se perderá la otra mitad. Si el juego termina con 4 o más goles, todas
              las apuestas tienen un estado perdedor.</div>
            <div class="col-12 modal-rules-content pt-4">Más de 2.75</div>
            <div class="col-12 modal-rules-content pt-4">Todas las apuestas realizadas en 'Más de 2,75' obtendrán un
              estado ganador si hay 4 o más goles marcados en el juego. Si el juego termina con exactamente 3 goles, la
              mitad de la apuesta ganará y la otra mitad se devolverá. Si el juego termina con 0, 1 o 2 goles, todas las
              apuestas tienen un estado perdedor.</div>
            <div class="col-12 modal-rules-content pt-4">Tenga en cuenta que en las apuestas en vivo todos los goles se
              agregan al resultado, sin importar si se anotan antes o después de que se haya realizado la apuesta.</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">Apuestas múltiples</div>
            <div class="col-12 modal-rules-content pt-4">Doble</div>
            <div class="col-12 modal-rules-content pt-4">Este tipo de apuesta también puede denominarse 'Parlay de dos
              partidas'. Se compone de dos selecciones en diferentes eventos, pero en realidad es una apuesta. Para que su
              selección se considere un ganador, ambas selecciones deben tener éxito. Las ganancias de la primera apuesta
              se reinvierten en la segunda apuesta.</div>
            <div class="col-12 modal-rules-content pt-4">Triple</div>
            <div class="col-12 modal-rules-content pt-4">Este tipo de apuesta también puede denominarse 'Parlay de tres
              partidas'. Requiere una apuesta que consiste en tres selecciones en diferentes eventos. Para una victoria
              exitosa, todas las selecciones deben ganar. Las ganancias de la primera apuesta se reinvierten en la segunda
              apuesta y luego de acuerdo con la tercera.</div>
            <div class="col-12 modal-rules-content pt-4">Cuádruple</div>
            <div class="col-12 modal-rules-content pt-4">Este tipo de apuesta también puede denominarse 'Parlay de cuatro
              partidas'. Requiere una apuesta que consiste en cuatro selecciones en diferentes eventos. Para una victoria
              exitosa, todas las selecciones deben ganar. Las ganancias de la primera apuesta se reinvierten en la segunda
              apuesta y luego de acuerdo con la tercera y luego la cuarta.</div>
            <div class="col-12 modal-rules-content pt-4">Quíntuple</div>
            <div class="col-12 modal-rules-content pt-4">Este tipo de apuesta también puede denominarse 'Parlay de cinco
              partidas'. Requiere una apuesta que consta de cinco selecciones en diferentes eventos. Para una victoria
              exitosa, todas las selecciones deben ganar. Las ganancias de la primera apuesta se reinvierten en las
              selecciones consecutivas.</div>
            <div class="col-12 modal-rules-content pt-4">Séxtuple</div>
            <div class="col-12 modal-rules-content pt-4">Este tipo de apuesta también puede denominarse 'Parlay de seis
              partidas'. Requiere una apuesta que consiste en seis selecciones en diferentes eventos. Para una victoria
              exitosa, todas las selecciones deben ganar. Las ganancias de la primera apuesta se reinvierten en las
              selecciones consecutivas.</div>
            <div class="col-12 modal-rules-content pt-4">Séptuple</div>
            <div class="col-12 modal-rules-content pt-4">Este tipo de apuesta también puede denominarse 'Parlay de siete
              partidas'. Requiere una apuesta que consiste en siete selecciones en diferentes eventos. Para una victoria
              exitosa, todas las selecciones deben ganar. Las ganancias de la primera apuesta se reinvierten en las
              selecciones consecutivas.</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">Doble oportunidad</div>
            <div class="col-12 modal-rules-content pt-4">La doble oportunidad permite al jugador apostar tanto en un
              resultado ganador como en un empate para el equipo / jugador elegido, lo que les brinda la oportunidad de
              ganar su apuesta siempre y cuando su selección no pierda el partido.</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">Goles Superior / Inferior</div>
            <div class="col-12 modal-rules-content pt-4">Los jugadores tienen la oportunidad de ubicar por encima o por
              debajo de los goles totales de un partido para una selección. Un popular mercado de apuestas de fútbol entre
              los jugadores, los objetivos Superior / Inferior se ofrecen en la mayoría de las selecciones con más de 2.5
              y más.</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">Apuestas a largo plazo</div>
            <div class="col-12 modal-rules-content pt-4">Las apuestas a largo plazo le permiten ubicarse en el resultado
              de una liga o competencia en lugar de un solo evento. Estos tipos de apuestas generalmente están disponibles
              antes del inicio de una temporada y pueden estar disponibles durante. Dependiendo de la oferta de apuesta
              abierta, además de apostar en un ganador de la competencia, puede apostar en la posición final de un equipo
              dentro de la competencia.</div>
            <div class="col-12 font-weight-bold modal-rules-subtitle pt-4">Ganador Sin Empate</div>
            <div class="col-12 modal-rules-content pt-4">'Ganador Sin Empate' le permite al jugador apostar local o
              visitante para obtener un resultado ganador. En caso de que el evento termine en un empate, su apuesta será
              devuelta, si su selección pierde la partida, su apuesta también es una pérdida.</div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
  
        </div>
      </div>
    </div>
  </div>


  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">
      <div class="logo mr-auto">
        <h1 class="text-light"><a href="https://winred.bet/"><span>Iniciar Sesión</span></a></h1>        
      </div>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class=""><a href="https://pe.bingofacil.bet" target="_blank">BingoPe</a></li>             
          <li><a href="#" onclick="$('#exampleModal').modal('show'); return false;">Reglamento</a></li> 
          <li class=""><a href="#" onclick="$('#modalDeposito').modal('show'); return false();">Depositos</a></li>
          <li class=""><a href="#" onclick="$('#modalRetiro').modal('show'); return false();">Retiros</a></li>
          <li class=""><a href="https://winred.bet" target="_blank">Juego en Soles</a></li>
          <li class=""><a href="https://us.winred.bet" target="_blank">Juego en Doláres</a></li>
          
                       
          
        </ul>
      </nav>
    </div>
  </header>       
  <section id="hero">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1> <span>Registrate</span></h1>
            <h2>20 Giros gratis en slots con tu primera recarga.</h2>                      
            <div class="text-center text-lg-left">
              <a href="#" class="btn-get-started scrollto" onclick="$('#modalRegistrarCuenta').modal('show'); return false();">Registra tu Cuenta Aqui...</a>             
            </div>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="assets/img/logowinred.png" class="img-fluid animated" alt="Winred, Casino On Line">
        </div>
      </div>
    </div>
    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>
  </section>
  <main id="main">      
             
    <section id="gallery" class="gallery">
      
    </section>    
     
        <section id="contact" class="contact">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Pide Tu Cuenta</h2>
          <p>Atencion personalizada las 24 Horas</p>
        </div>
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>WinRed<span>Betting Club</span></h1>
            <h2></h2>
            <div class="text-center text-lg-left">
              <a href="https://wa.link/ns85hp" class="btn-get-started scrollto" target="_blank">Contactanos</a>
            </div>
          </div>
        </div>
        </div>      
      </div>
      
    </section>   

  </main>   
   <footer id="footer">
    <div class="footer-top">     
    <div class="container">
      <div class="copyright">
        &copy; Copyright 2012-2020 <strong><span> WinRed Betting Club </span></strong> . Todos los Derechos Reservados
      </div>      
    </div>       
  </footer>  
  <div id="preloader"></div>  
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/js/main.js"></script>   
  <script src="assets/js/funciones.js"></script>   
  <script src="assets/js/sweetalert.min.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  



  <script>
       
        
        function registrar_cuenta()
        {
            let nombrecompleto  = document["formulario_registro_cuenta"].usuario.value; 
            let email           = document["formulario_registro_cuenta"].email.value;                        
            let movil           = document["formulario_registro_cuenta"].movil.value;
            let movil_wp        = document["formulario_registro_cuenta"].movil_wp.value;
            let idmoneda        = document["formulario_registro_cuenta"].idmoneda.value;
            let usuario         = document["formulario_registro_cuenta"].usuario.value;
            
            if (nombrecompleto.length === 0){
                swal("Usuario es Invalido!", "Presione el Boton Ok!", "error").then((value)=> {
                    document.getElementById("nombrecompleto").focus();
                });  
                return false;                              
            }

            if (email.length === 0){
                swal("Email es Invalido!", "Presione el Boton Ok!", "error").then((value)=> {
                    document.getElementById("email").focus();
                });  
                return false;                              
            }


            if (movil.length === 0){
                swal("Numero de movil es Invalido!", "Presione el Boton Ok!", "error").then((value)=> {
                    document.getElementById("movil").focus();
                });  
                return false;                              
            }


           


            if (idmoneda.length === 0){
                swal("Seleccione la moneda!", "Presione el Boton Ok!", "error").then((value)=> {
                    document.getElementById("idmoneda").focus();
                });  
                return false;                              
            }

            if (usuario.length === 0){
                swal("Usuario invalido!", "Presione el Boton Ok!", "error").then((value)=> {
                    document.getElementById("usuario").focus();
                });  
                return false;                              
            }
            
            axios.post('jugador',
                    {
                        nombrecompleto: nombrecompleto,
                        email: email,
                        movil: movil,
                        movil_wp: movil_wp,                        
                        idmoneda: idmoneda,
                        usuario: usuario
                    })            
            .then(function (resp) {
                alert(resp.status);
                if (resp.status == 200)
                {
                 
                  swal("Registro Insertado", "Presione el Boton Ok!", "success").then((value)=> {$("#modalRegistrarCuenta").modal('hide');});  
                }
                else 
                {
                 
                    swal("No se pudo completar el registro, verifique la informacion", "Presione el Boton Ok!", "error").then((value)=> {});  
                    
                }
            })
            .catch(function (error) {     
                
                console.log(error);
                swal("Error", "Presione el Boton Ok!", "error").then((value)=> {});  
            });    
        }




        function registrar_deposito(form)
        {

            let usuario     = document["formulario_deposito"].usuario.value; 
            let email       = document["formulario_deposito"].email.value;                        
            let idmoneda    = document["formulario_deposito"].idmoneda.value;
            let monto       = document["formulario_deposito"].monto.value;
            let referencia  = document["formulario_deposito"].referencia.value;
            
            if (usuario.length === 0){
                swal("Usuario es Invalido!", "Presione el Boton Ok!", "error").then((value)=> {
                    document.getElementById("usuario").focus();
                });  
                return false;                              
            }

            if (email.length === 0){
                swal("Email es Invalido!", "Presione el Boton Ok!", "error").then((value)=> {
                    document.getElementById("email").focus();
                });  
                return false;                              
            }

            if (idmoneda.length === 0){
                swal("Seleccione la moneda!", "Presione el Boton Ok!", "error").then((value)=> {
                    document.getElementById("idmoneda").focus();
                });  
                return false;                              
            }

            if (referencia.length === 0){
                swal("Numero de Referencia Invalido!", "Presione el Boton Ok!", "error").then((value)=> {
                    document.getElementById("email").focus();
                });  
                return false;                              
            }


            if (monto.length === 0){
                swal("Indique el monto!", "Presione el Boton Ok!", "error").then((value)=> {
                    document.getElementById("monto").focus();
                });  
                return false;                              
            }

            axios.post('deposito',
                    {
                        email: email,
                        usuario: usuario,
                        idmoneda: idmoneda,
                        monto: monto,
                        referencia: referencia
                    })            
            .then(function (resp) {
                // handle success
                if (resp.status == 200)
                {
                  swal("Error", "Presione el Boton Ok!", "success").then((value)=> {$("#modalDeposito").modal('hide');});
                }
                else 
                {
                  swal(resp.data.msg, "Presione el Boton Ok!", "error").then((value)=> {});
                }
            })
            .catch(function (error) {     
                
                swal(error.data.msg, "Presione el Boton Ok!", "error").then((value)=> {});  
            });                        
        }




        function registrar_retiro(form)
        {

            let usuario       = document["formulario_retiro"].usuario.value; 
            let email       = document["formulario_retiro"].email.value;                        
            let idmoneda    = document["formulario_retiro"].idmoneda.value;
            let monto       = document["formulario_retiro"].monto.value;
            
            if (usuario.length === 0){
                swal("Usuario es Invalido!", "Presione el Boton Ok!", "error").then((value)=> {
                    document.getElementById("usuario").focus();
                });  
                return false;                              
            }

            if (email.length === 0){
                swal("Email es Invalido!", "Presione el Boton Ok!", "error").then((value)=> {
                    document.getElementById("email").focus();
                });  
                return false;                              
            }

            if (idmoneda.length === 0){
                swal("Seleccione la moneda!", "Presione el Boton Ok!", "error").then((value)=> {
                    document.getElementById("idmoneda").focus();
                });  
                return false;                              
            }

            if (monto.length === 0){
                swal("Indique el monto!", "Presione el Boton Ok!", "error").then((value)=> {
                    document.getElementById("monto").focus();
                });  
                return false;                              
            }
            
            axios.post('retiro',
                    {
                        email: email,
                        usuario: usuario,
                        idmoneda: idmoneda,
                        monto: monto
                    })            
            .then(function (resp) {
                // handle success
                if (resp.status == 200)
                {
                  swal(resp.data.msg, "Presione el Boton Ok!", "success").then((value)=> {$("#modalRetiro").modal('hide');});
                }
                else 
                {
                  swal(resp.data.msg, "Presione el Boton Ok!", "error");
                }
            })
            .catch(function (error) {     
                
                swal("hola", "Presione el Boton Ok!", "error");
            });                        
        }



    </script>
</body>
</html>