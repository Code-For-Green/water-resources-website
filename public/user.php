<?php
    session_start();

    if(!isset($_SESSION['islogin'])){
        header('Location: index.html');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://kit.fontawesome.com/9e2ab713e9.js" crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>WiseLet</title>
</head>
<body class="bg-gray-100">
<!-- Navbar Styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css" integrity="sha256-x8PYmLKD83R9T/sYmJn1j3is/chhJdySyhet/JuHnfY=" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<!-- Media Query Breakpoints for Navbar -->
  <style>
    @media (min-width: 1024px) {
      .top-navbar {
        display: inline-flex !important;
      }
      .displayed {
        display: flex;
        }
    }
  </style>
  <main>
<!-- Navbar -->
  <nav class="flex items-center bg-blue-500 p-3 flex-wrap px-10">
<!-- Navbar Brand -->
    <a href="/public/index.html" class="p-2 mr-4 inline-flex items-center">
      <svg width="65" height="64" viewBox="0 0 65 64" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g filter="url(#filter0_d)">
        <rect x="4" width="56.4628" height="56" fill="url(#pattern0)"/>
        </g>
        <defs>
        <filter id="filter0_d" x="0" y="0" width="64.4628" height="64" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
        <feOffset dy="4"/>
        <feGaussianBlur stdDeviation="2"/>
        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
        </filter>
        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
        <use xlink:href="#image0" transform="translate(0 -0.00413224) scale(0.00390625)"/>
        </pattern>
        <image id="image0" width="256" height="256" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEACAYAAABccqhmAAAgAElEQVR4nO2dB3icZ5Xvz/QZadS71WxZco/tOLaD00jikEbYAOFSs7sJsHCXy2U38GyDsJTLZdmFhyVsWHaBuxAIWUpCIASnkR7HTpzYjrtlWcXqvY5G0+/zP/N9oxlZZaT5pp8fj4g1mpnv+97yf8/7vuc9hwRBEARBEARBEARBEARBEARBEARBEARBEARBEARBEARBEARBEARBSA90mVBP3d3dKXAXaUNAudGMqPtkUV1dnRHPoU+BexASRyDsSgEpd0EEQBCyGBGA7GG+EV+sgCxHBEAQEchiRACyA+nkwryIAAgkApG9iABkPtK5hQURAchsltP5RSiyEBEAIRwRgSxDBCBzkc4sLIkIgDAXEY4sQgQgM5FOLESFCIAwHyIgWYIIQOahVecVEcgCRAAEIYsRAcgstB61xQrIcEQAMod4dVYRgQxGBEAQshgRgMwg3qO0WAEZigiAIGQxIgDpT6JGZ7ECMhARgPQm0Z1SRCDDEAEQhCxGBCB9SdZoLFZABiECIAhZjAhAepLsUVisgAxBBEBYKSICGYAIQPohHU/QDBEAIRZEjNIcEYD0QjqcoCkiAOlDqnZ+EaU0RgRA0AIRgTRFBCA9kA4mxAURAEErRKTSEBGA1CedOpaIQJohApDaSIcS4ooIgKA1IlpphAhA6iIdSYg7IgBCPBDxShNEAFKTTOhAIgJpgAiAIGQxIgCpRyaNnGIFpDgiAKmFdBghoYgACPFGRC2FEQFIHTK5o4gIpCgiAIKQxYgApAbZMEKKFZCCiAAIQhYjApB8smlkFCsgxRABEBKNiEAKIQKQXKQzCElFBCB5ZHPnF+FLEUQAhGQhIpACiAAkB2n8QkogAiAkExHCJCMCkHik0QspgwiAkGxEEJOICEBikcY+P1IuSUIEIHFIIxdSDhEAIVUQgUwCIgCJQRq3kJKIAAiphAhlghEBiD/SqJeHlFcCEQEQhCxGBCC+yGi2MqTcEoQIQPyQRhwbUn4JQARAELIYEYD4IKOXNkg5xhkRAEHIYkQAtEdGLW2R8owjIgBCOiAiECdEALRFGqqQVogAaId0/vgi5RsHRAAEIYsRAdAGGZ0Sg5SzxogACOmGiICGiADEjjRIIW0RARDSERFdjRABiA1piEJaIwKwcqTzJxcpfw0QARDSGRGBGBEBWBnS8ISMQARASHdEjGNABGD5SIMTMgYRACETEFFeISIAy0MaWuoidbMCRACiRxqYkHGIAAiZhIj0MjGm1d3GkRvf99cLfvnTD38nZRrWtHOGegeGqH9wmMYnHaQjosKCPKooK6HKshKyWS1xu7ZzxkV9g8N87bHxSe5tBXm5fO2q8lLKsVnjdu1lELj5A5/QLfb2J3/5g1S4z5RABCBN6OodoOf2H6Ljp87xv+ejtrqCtm5somv3XEY1qyo0e7Cunn56/tU36PiZFurs7p/3PTVV5XTJpibae+Uuqq4qz5yCz3AWVcp0obu7O+Y7XcgCSPbo73TO0G+fepH++NJBmna6ovqM1Wqm66/cRe+59Xqy59hWfG3HtJMefeJ5evaV12lmxh3VZ3JsFrrhmrfR7Te9PakWwWJWgBYWQHV1dczfkQqIBZDCYKT/z589Qi1tnRfdpD9A5KcAK7iOdKQPa+7orPue3U8nz56nT9x5BzXUL7+xtl3o5mt3dPXNe+0A/w+LSJHXhkg99tSLdKq5lT5553s1tUQE7ZFFwEVI5ujf3tFD//y9n0R0ftyMy+8nl99HVoOOqnMsVJVjIbNBx6/hb+E3jM6L7zhx9vyyro33f+P+n0R0/vBr43q4Lq5vXeDauO9/+fefUseFnpjKYaU8+csfyIJgFMgUQGHuFCCZnX9oZIy+dt+PqH9gJPSaNxAgXyBA20vz6R01ZbS52E42o4FrcNrjo+PDk/Rc9xAdG5rg10y6WW2323Po7z99F62tr1ny2q0d3fRP9/+YpqamQ695An5WgK2l+bS3upS2lORRjsnArzm9Pjo5MkXPdA3S0aEJMuh0ZNTNNquKsmK6968/TqXFhZqWUbTMNxWQKcAsMgVIMQKBAP3gwd9EdH6P3092k4E+vqmebqkrI4vBQJ5AgN8Lyqw6WluQSzfXldGzXUP0/0530qDTRVaDgf+OzvwfDzxM//jZv6A8e+6CDzzlmKbvP/DriM4/4/NRmc1MH9tYR3trSslqNJDXHyC/cm2dTkcN+bl0Y20pPXFhkH50qoOmPD4y6YMC1D84ws/zD//7bn6vkFqIAMxDvEZ/n89Pvf2D1NLeRd29/byNh05ss1morKSI1jfU07n2Tjp+uiX0GYz8JVYzff6yRtpdUUjTHj9Ne31zvjlAbh+RXqej21ZX0NrCXPraoWbqmJwhqyHYEbGe8Mi+5+iu979rwft7+PE/RuwwzPj8tDovh+7d1UQbCu3k9PrZ2ph7bQ8Rj/x3rK2kWruVvv5mCw27PGRSOjyeZ99z+6lpdS2dbe2gweFRcjpdLAjYRqyuqqDG1TVUVVFGBoO2s1JMBZbaFsxmRAASgNfrpf2H3qKXDh6ms+c7WAiiASY/OvDntjfQzvJCmnTP7XyRYFR2eHy0ocBO9+5cR184eJpGXN6QSf7C/jd4d6CuuvKiz17o7qMXXn0z9DuEp9xmoi/sbKL1BXb+3sXAveL+cJ+43//zxjly+fwsDODBh/ct+nl0/PVr6+nqy3fQVbu3kdEoTTMRyCLgHLQe/U+fa6Ov/usP6T9++gidam6LuvMHlLn3HQ1VdEVV8Twj78LAQthYZKePbqyLWJhzuT30/P5D834OPgb4e/j1P7axnr/nYotjkWt7fHRFZTHfN+4/2sJEuaB8sPOA8kK5aYUsCC6MCEAcgdn79e/+F51rjdzGw0jt9vt5fu30BVfQfYHINooRuC7XRrc3VJDbG31HUpnx+umGmjK6tDSfv1/l6MlmmnFF7unDw++tk82h3/F+fA5zfnzPcsB94tlw37h/75znwnPi+/HceH681z/nPSgvlNsTz+7XrHJEBOZH7KwwtBz9f7PvOfr17/8Y8Ro3fp+f8k1GqrdbKd9k4Hk7OsOg003908F5Mcxmh8dLe2tqqNRq4ZX25YJr5ZoMdF11KR0ZmuCOqVN2GLAOsaZudhW7t3+IXyelA+Oe8DmrUb+k6T8fWCTEfe+tLqPvn2onu8nI94P1joocCy8q2gwG7vgTHh/1Ts3QhMdLFoM+NGXwen3004f/QE6Xi9576/VaVYswBxEABS07/0sHDl/U+dHJy6xmurm+nK6qKqZVuRbKN5nZiQYdHAJwfHiCHu/opx7HDO2pLKLb1pTzCLlS3L4AbSy2k0WvJx+8d3TBjjU+ORXxjRNTU/w6EyB+/6ZiO39+xdf2++m2hnJqmXTQieEJWpVrpdvqK+iSkvygABgN7FA04XFTz5SLXukboSc7Bmhwxs3ioIJyLC0qoGv2XLbie1GBFXDTBz8lC4JhiABoDA7KPPDw46EvDShbaXsqiugvt6ymhoIc7owYJV2+YKfDiIsOUpdno7dXl9DwjJsqcyz8Ot63UvBJm17PI38gzOnDP+c7w39X32fV62M6WodnLDSb6B93NlHftIt3MmAJ4HlgDahWTY7BSBuKTLS5JI/9G75/op0O9I/yFqZ6vw88/Ada37iaDx3FylO/+PdApvi/aIGsAQTRbPTHiDU9PRP6HSb/9dWl9KVd66g+L4cXyfBa+JwfpjD2+tEpsH8OMcCfY+n8Kiv9Bi0KBPeP58Dz4LnwfJ45c351WoRyQfmgnFBerrDFUpTnXItK0AYRAA250NVLh946GfpCmMFYRb9n+xp2oFFH/MVA5+COk84FEUZAEYK5C33zgfJBOaG8UG7h0x+U63znEmK4rayHRAAYzRrDa0dOktvtDX5pgHj//c831FCRxUzuKLf/sh2UE8oL5YbyU3UD5Xro6IlsLx7NEQHQkKMnzoS+zB3w07bSfLqsrHDZW2nZDsoL5YazByhHlSMnzmpZMllvBZAIgHaNYHR8kgbCttJg8u4sLyCbUR+V+SvMgvJCue0qL+B/q6U3MDzK5awhWV8x2SwAmlb+8OgYuRQHG/bvNxio1m4Lbr8JywblhvJDOaqHnlC+KGdBO7LdAtAMl8tDPmWRD83VpNfxtpcY/ysD5YbyQzmqEoryRTlrTFYrdLYKgOaVjsMsev1scfp5G0+6fywEtwxnN+1RvkajjFlaIqWpEQh4YTab+MvgejOjuPca9eJzshJQbkNON5ejTpEAlG9JUVwCi2StFZCNAqB5ZU9OOfiMu0GxAODOjj3sc+OO4O9aXzDD0SnbqCg/lKMaR8RoMHA5o7zjQFaKQLa5AmtayQiTjTP+51ovcOSbcODK+nLvCAfoqMvLIY/4AUSNQa+j4RkXvdE/ztGPVCYmHfTVb/+Qw4w1NdTR2/dcRlvWr02HR0pZ5CzACmjv7KFf/f4ZOnJ84X1pnGrrnXbRc13D9MnNubSCQ3VRo8uw4QunAl/oGaYLDieZ9RcbqRBb/Lzy2lG6dMt6ev+fvINW167S4tJZd04gmwRAkz7y4oE36cFH9tGUw3nR39Q9a/VIK1awX+0boTsaq8huMFx0Nj5WcFgI14A/Pa4JczndXQ5wZgCnIR8938fPp4Jn1CnPHA6cg861XaCPvPdWuvaK2E8MZhuyCLgMHn/mZY7sE9750TBnOKiHj4+4FllMoYM+iMzbMuGgZy4MktWkbVGjI0BwHmnt5fBbv2/v486fzsOXTln8+3lzN3VMOUOhzFCeKFeUL8oZ5R1+mAr1gUhCqB8NyKq1gGyxAGKuVMz1f/6bJyJeQ0PMMRromlWldPWqEmosyOXwWV987Qwf6TXq9Pzzi3PdHCuvIT9nRcE95sLHdY16+vHpTvrPEx2k1+voj52D/Jd3rakgV5q6HiOAyVOdQ/SHjgGy6INzf1g1dXYbfXn3Oi7LlnEHvdw7TAf6RrmsrWFrBKif/LxcuuZtO5L4FOmFWABRgEi5P/7lYxFvRIAPxMf/5z0b6R93rucjrNW5VtpSnEe31VeSSwmmgVEMQS6+ffQ8jbo9PL+NBZ3SUZ7uHKQHz3ZzfH67MdgJkBtANZWTAQZsjNJ5ZgOf6ptrri8GnuP4yCR971gb5xzC7qmq2neur6F1RXZaZbfS9TWlXN4od5S/c84JS9TTQrkTl0HWWAHZIAAxV+ZDjz4RkRsPI//VVcX0jbdtpG2lBXyMFSM7TrLhv+9uqKDNxXlsrgK4sx4dnqD/e6iZhhDxxmhYUSdFp0Dnf7ZrmO57q5VTgxl4KhBcOd9SYicj6ZLSetHXYZU/iinJoXP0TOcAixEsJNzjQs+rUzr/2TEHff2NFhpxu0NJTZxeL91YW8biOuX28k4KyhfljXJH+aMewkUA9fTfv30yQU+d/ogFsASnz7VGBMyESYrO/bc7GinXZOQGGd7hcPY932yi/7m5nvIQAUeZq+YYDPTawBh94eAZOjw4RhajgUzLsAbMHC9PT78+30v/cqSFpr3+0Bx52uel66pL6MZahBBLzuBlNhjo0bZe+tbR8xzW7BuHW/hZn+ocpGmvl+8fHR3/xTwfi30QB7PRQK/0jNCXXjtDnQ5nyPSHyG4syqOPb6qjgCIuKgEKhlFD+aMeUB/hsQNQX2daYo4qnBVWgGwDLsGLBw6HQmb5ldH8LzbVU5HZtGC47Bmvj3aUFXAIsG8fbQ2t0uOzcG6597WzdFNdGfsIIPEG/uZTAoGEMu4o++FGJTRX67iDHjrXTc91DUWk38I9bCnOp09fsoY7VbLcj3E3B/tH2QsSFg7u+fDQOL01PEE1uVY+GbmhKI9DnSHLEZ4VocJe6R2hF7uHuQNblC0//Ls8x0L3bG+gMpuFy3M+OHaA2cT1ce/BM5wtSa+EGEeOgw2Na5JSFulEpgtATCqOcNknm1tDv8P0vKqmlM/5O5dw7EGjvaW+nBvp/cfbOUY+TFvsayPcFUZypPHCuXfEC1xTkEPltmDcPMyd8bkBp4s6Jqfp1d5Reql3hEZdHrLqDSHPuGmfj9YV5tLnL2tatKMkik1FefR63xiZA8HovhZFvLocM3S+xcECZVesAL+SSETt+GoqMYz8WPH/20vX0uaivCVzEqAekC9xd2Uhi6MaUBT1hvDnVos5lqfPeL8AsQAWoau3n8aU8+cYmNFIEa0XJuxSEX44Pr7XT+9pqKICi4n+7Vgbd2gEwUTnwJQAIbef7RqkP3YNUrHFRMVWM8/x8Xes5I+5PTTgdIc6idq41a3HXeWF3FGqcm1J7/wojw+vq2EraV97P425PDwtUK0VZPoJmu5+/iElrbn6TBAECNpqew6b9ZeW5UeVDAVHhWEl7Skvopd7RoJboTrieuvq6afGNbVxf/Z0JpMFIOY53PDoeChcNhbccox6TsIZbbjsgGIJ3FBTSvV5NvrhyQtsJqPRwhpA5zCoCTw9Php3T0ck3TToiAykZ7EgRYRm/D6eJ3+gaRXdtaGW7EZj0js/KR0YkYQ/tWU1P+++9gHa3zfCZj4pDj46ZTjVhRYqESE4aPLDMrqptpw+vrGWavJsy8qEhPpoLMzl+oG4YIkV9Yb6EwFYHLEAFiF85R+gkRaajaEAFdGAd2Kkx1z/K7vX8/mA37X10umRKTZveXGPgslADItsmwWFQcdrCx9qWkW7y4vJF/BHRM9NNhzu2+Ojtfm59FfbGugDjVV0eHCC3hwapzMjUzTh8ZDHF+CFUZ0iCnazgdcw3lFbyhYNxGE5nZ8UK6DQYuT6cYZFYMAUTgMyehogArAIc/tjIAazAiYyvg/ptvZUFPLi2Kt9o5zPH6MkTHqDTheaC8+9LnYMPrm5jt61upLXCFJh1F8IdXpUarPQO1dX0I11ZTTl8VKf003DThfvYOBZIaY1eVYqtpjZjHfxjsrKStg/T91INvKlyVQB0GQLx2azRvyOABXDMx4qMpsvyuUX1U0FglMCnrNWFtPlFUU04fZQ55ST568YLdsnp/k6EALVItAp24tw/kEu/q0l+Vo8XtzxcgIUX3Cv32ikpnwTrS+080q9GjcRob98yvtWCgRxZMbN5RZOzpz6i4GMtQLEAliEsuJCMpmM5PF4eXvL4fHT2dEp2lRkJ08MljcaPoSAvfqMRtpcnE9bSwp40e/MyCQ93TVEB3tHadLr5fk+HIDw3hPDk/T5g6fpM1vX8J4/rIZ0OPwTUMx0nsbEYcZiNujo7KiD60fdHkW9lZYUaX+xDEMcgRahpqqCiguDoy3aFebc8EHHvHs5bq4LEVDmzaoHYa7RQJdXFtMXd66jb125iZ17/OTnLURSYgw4vD765pFWPvyzUo/CTAL1gPpAvaB+1GpBvdVUlmd56SxNJgqAZmMiRhGcN1dBcIo3Bsbotf5RDlutNTCZYRlgLryxOI++tGs9/f2ljVRqNfNoT8oJQ4jGd4+185TAZjRofh/pBOoB9YF6CQ8egnpD/QmLIxbAEuBkmdqQdMqIje08nFk3x3iwZyHU7UP4vt9UV84HX+Duqp4kNLLnoJ/uP9ZGx0cm+OBNNoLyRz2gPsIPQaG+4nAiMCNdg0UAlgB59K/avT30JizOtU5Os4svzHEtpgILEVBcfVfn59JXd6+ny8oLQgdfcDQWnoH3H2vnhcRsCz6Kckf5ox5QH+G7J6gv1JsQRTlmWBlprtLjE1PkmI6M/gN33Ff7R6l5ZCrm473RgClBidVC/3BZE20otIemA1gTgAXwq5aeuFkjqQrKHeWPerDqIy0g1BfqTVgasQAWAdl+v3bfj+j1Iycj3oRFOXbNNRsSlvgDnR4HaT53aQP7yqunDCECv2vrozNjjqwSAZR7jtnA9eAJRNYC6gv1hvrTmIybBogALMD5ji76xv0/oa6e2eASqr96nslAH99US+vgFpwghxwY+PCQw4GbuzbWRsQfxFTgNy09CbmP5RKviQnKvakgl+sB9YF6Cc/BiHpD/aEehYURAZiH/sFhuu+H/x2RiDI4yujo3asr6btXX0IfbKxmB5ZEDwl8yrCunC4rKyB32FQAfvc4arycGAPxREfB6ECIexCP7cqAkj8Q9YD6ePeaSnYjDrcGUH+oR9SnMD8iAHNwezz0gwd/wwkoVHBYBaf1vrCziT67fS0nrZzx+ZNiD+LwDLa77lhbyQtfalSgMZeXXu4ZDjkNJROdEs4LU5OvvXGOHmvr47uJhwigHlAfn922lj6/s4lKLKaI4CCoR9Qn6lW4mEwSAE3649MvHKRTzbPRZNCYymxm+vIuxP0r4VF3rstpooHj0I7SQtpUYmcnGJ0yPRlxeigVkhFDoJ7qHKBvHmmhfR199C9Hz9MzXYNxW6NAfaBeUD+oJ9RXuAigPlGvwsWIBRDGyNg4Pf7MS6EXfJyn3kB/t30tB52YnhP+K1mgs6Mzfaixmo8KT3o8vDB4bU1J0pOEqAeVDvaN8ZifZzLxDR0dmohrwFJ1y3RraT7XF8KNhZ/XQL2OjI5rdamMQQQgjOf3v0Hjk7N55zCyfLipmi6vLOLz+qkERv6d5UXsMvy57Wvpm1du4uhCSwUqiTc6ZcdirqMUdjAgDvHuPTh6jfr6UFN1hBWAen3+1TeSUygpjAiAAs6Ov/L60dDv6PzrC/Po9oYKnmemIoj/t6k4j+5Yu4pP2SV7akLK/B/iNO72hEZ7WCyrcm0Jc1ZCfaHeNswpE9QvwoQJs4gAKLR2dtLAYHDhTz33f3N9GRWaTeyjn6qoB4mSPfLPouMOqJr7Ac72o+dQZ4k6uYj6Qr3dXFcWEcMB9dt6oTMxN5EmiAAonDvfRX5lC8mvpKLaXV4YSvAhRE9gTuQUWAWJbmiwQnZXFHE9qv4BqN+WVvELCCdTBCDmXtoR5jUGL7u1+TlUYjEvK/yXEKwKnM9X7X81mAmENJERelBtqD+kYwtPyorMzsIsYgEoDIXt+8PBpNpu5YSefhGA5REI+ukjacdsyQVoxOVK6BYlByk16Tldmy/swuH+HYIIQAiHc/bADxoPtq+QelvLNos1MKyE4ydT49X5lSxB2ItXt+HwvBcmnNwRE/XYASU9O7I0hYt4eD0LIgCLENBsx5fzACjJMn1KaCwc50WSjBwlRVg8jxUnkoCSD7Au10oeZeTF6v/pMQdvDyb0MbkKxYJbDAmZopBrs4X+jc446fFyA47VsQad3+Hz0c+bu9hXH98J1bWaDOxejNTX64vs/F9kBcK2VSrvOixFgMOn66ip0E4G/QDPxRFPsWdqhuP2XVqen5D05Treyg1wPYaLa3g9x0DGBAkVAVBAAMmW9uAKMTptj0MN1a2PaSEQuft/drKLBcCsjPQB5SQfZxsy6Pg8+5oCG2e6va66lCpzrLyKna7rD7h3eOQh7DcCdaI8p7weerl3iPMaJMJbEYlVUH+9DldEvgUJFBqJTAEU6qorQ/+GyXp+3MHprWLxXWEffX+A3hwc57BdSIOF8+s4vYd/w1TGVACj/qmRKfre8Q6655WT9PD5HhaHdD3fj7k+DuhsKsoPOeLgfMAL3cPUhug9CXgu1BvqD/UY7oAUXs+CCECIpjW1ofkpx5l3eejQwHhMEX8CigWwoyyf/eMxIoX/wFUVozyuZ1bSZfc5XfSdY2305UNnqH96hixxCD4abwJK6LR31JbxSKzGLRh2eeih5m4Wxng7BaLeUH8jLOJKfgVdsJ6FWWQKoNBQX0NlJUU0MDQamtzhRNsNNWW8mrySRCCkWADI4ZdvMlLbpJODV6DTj7q8nPhzwDnDAT04b75Oz1F/EeMTKcR6p930xV1NtDYvJ2XdkRcCATuQSPWSkjx6a2giaP0YDPRc9xAfrLp9TUXczldAbJB5+MnOYDAXtT7LS4u5noVZRAAUkEXmbTsuoceeDp4GxIh8cmSK9l3opw82rlpxY+UThQYD3bWxLnItQYcceF7qdMzQ4YExeqZziFonHKGMQEgYcn7CQV99vZm+dvkGqrFbUyoP4FL4lYAgH2mq5jyIqqWD1//jZDtV5Vo4F6AjDiKAUOG/benhaZUlLFjo7ku3aJktKCOQKUAY11+1i3JyZhsIwm//7GwX5/HLMa089LZPyQSEDhz68frYskBYsTvX1dC3r9pEd2+oZeFRo9rgqC/mzN851sr+/oslD01F8Ixwx721vjxkwaBMIab/dLiFDg+O8xkBLacDqCdYHA+e7QplCQK5OVa64erdaVV+iUAEIIyKshK69forQy+gw427vfSNN1t4C88WgwjMB3b7cIgH59jzTEa6e1MdfWFXIxWYTSERgPVwaGCMfn2+N+0WBdX8fx/dWEtbSvJC0YwhckNON335UDM93t7P6wQ2xU8iFlA/qKdvHG7hegsXzFuuv5KnAEIkIgBzeOcNV1Pj6tl5IkzIToeT7j14hvb3jnBDRUfUeizmrEAeH729qoT+7tK1vDWorjugw/ymtZdaJxKzgq4lELmyXAvdu7OJU6R7FWHDM024vfStI+fpi6+doZd7h8nl93P5WpUyRgdeqpzRx/FefO5A7wjXE+or3PRHfaJeNSRj/DhFAOZgtZjpL+58LxXk20N/QIJOpPD+6qFm+s5brdQx6eTVeeM8qbxjIaAEtLiqqpj+dEM1eRQB4BX0GTf9rq03wqxNZfTKqI4twVe6humR872c1CS8S+NZ4GeBvH5fer2Z7nn5JN1/vI329w5zGU95vWQ0BI8Sw7S3KQFGsVuC34PTBx2/F/UCiwL1ZAnLE4B6RH2iXoWLkUXAecBe8Wc+9kH61x8+RFNT0/wGjFgYpR8+30vPdg9yNB7M2atyLJp67qmBLt+9pope7R2l4yOTPJphBf2VnhF639pVVJVjTYngHwuBLTiPL5jOHKJ1anSKf7cY9BetY+BX+EWgCLHo2Tw+xYlOiqwmKrVYKN9spAKLid2mbbC8dDoOhII1kXGPj6bcXmrmhj0AABDkSURBVOqYnOa07fh+c5go2+05XI+y978wIgALsGldA/3NX/4Z/ftPfkX9gyP8JtWnf9rjpz+095PL46OvXL5+Bd++OBAUjG7vaaiiU6PB0OQYLfudbl4PwOuxpCePFzrFxfnc2BT916lOOtA/ymsAEC81T6eaKpzXB+CpHwiWK/tC6GY775TbR+MuRyj/wXx2j/q6SfGhCKeirJg+ddf7aV1DXeoVVAqRKVOAuNjFaDyf/8zHaOf2zRGHWILbdAa6MOUkJ6cK1/7a8JffWV5ADfm5oQVBHLN/tXeER8BUgzu/0UDPdQ7R3x04Ta/0jXDHxOiuJlXFFABJTTFKF1tNtL7Azn4ChZbgGYjg32cTnpjDvCat8/yor4dbFfjnzu0b6fOf+ah0/igQC2AJykuL6HOf/Aj94dmX6cGHnwi9GUEm0HghBPEIx4WOUIioRBWFdGZsirABYdDrqH3SyfPcSo2nHrGgdv7ft/XRvx1rJw/5uXOqz6HmVdhRVsxOQOsK7XxcGB2cvS5nPPT6wChvt54bc9Cg083WAZyofMr380ilLAqqVgQp6zPh4vyRO26ld+69KiXKJR0QAYgSQ9jCEvodGjhSd+viuCiH62wtzqNcQ3BHAHsP8Bpsn5xmX3uvPzUiFWNh7umuQXZhxvhtUkx5rOrDlwFef+9aXUl1ecHAoFgPUA864f/hFPT+xlV0+5pKGnG5qc/hYqHrmZ7h7UJMB9x+H5/uUxOhYF0Enz2trC+o1WA0ZGeq9JUiAhAlR082h94Ik3xLkZ02FNk5h3+8wHc3FORSntnArsN8qs7j5ZDbqbIZgIW3EyOTdN+xNu6caueHOQ8np09vXcNpzNB5gwk8Lv4OCB3EDM9UbDFTqdVC20oLQrEE3f4AW1ledXqgBB3B3//q5eN0Ah5/ynWPnDhLN127J9HFkLbINmAUTE07qW9gKPRGmJ+bi/N54SmeR3bxzZhilNosoevoeEvQw+Z/sjUgeMzXS9870UbjLk9E599ZVkhf37ORj/9iaxMdeKmiCgSCC6BqpGMkQ4XXoIfXWYKjvlUf3H7181qCjush3MUa9TQ1LVF/okUEIAompxw0FpYoFI2xsSCX4h0wGOMdrlVgNobSkGPBEWcIkh0rQEdBB5zft/XT8aHJ0Jzf5fPRluI8+ofLGqnUauZOHCuqR6FP+fHzTzBPIuoh3IMQ9YT6ivOjZwwiAFHgcrnJ5Z5NLokWgEWsREUMnusPlwpLf1iQxFTksfY+DmpCysIownD/9bYGKrNZ4p6rAOVfZjVHlA7qySXJP6ImkwQgbsrsn2e1PZY4AdGCjo9LT3hms+xAc7Twm48VjP442ovISTjGHFCyKX2waRWvjeDwUyKYL17CfPUlzI9YAFFgmKezOxPQwNHFHV4vb4upe90wf2FaGxOQZ28hgoekPPRK70hIiOCbsDY/l26pryB3AmL+qcxXD/PVlzA/UlJRAD9ym9USeiM6Xp/DHdctQFJGWbjGIve/mgIcoz9yFiRzjIP53zft5nBbqust9vpvrC3lKYA3UVMjnY63DMOvhnoSv//oEQGIgvw8OxUX5YfeiI54dmySDHHs/9AWNOwDvaN8jDaYWTfADjXIWhTP7celgIVtN+o5ijEW/Vx+Hx9h3lNZzFt2iQLlf3ZsKmJBFPWE+ooTGZfNIdMEIC4VhFGlurI89Ds6Iw7pIOhkvE7nYfSHTz1Cg5kVJyR0ro3FeVSeY03YKDsfMPdxD5/asprq7TZalWOlv9xcz85JiRImlDvKH/UQvh6yqqI8wloTlihHKZ/ouGRDI71+5CS/F2Zv+8Q0vTEwRntry8ircVgrzLFxjPbB5m5u5PB3V/3j31FTyv/1RPE98QQdHSHML68sZFPFZjQm9IyC2ainl3qHuR7CTwBu3dSU2IJIc2QKECU7tm4ge+5sUgk09Ydb+9hNVctQXZjXWo16PhL7Ys8wn6QjPiLso22l+bSzvDBlUoFj1R+++LhHdP5E2SRq0M9HWvsovCRQPzsu2RCvy2ZkMjcRgCgpLiygK3ZuC70ZXmnHhyboly093GG1aB0GDqKhp9+29tF/ne5kM1c9SYfrIcCmLc7eh8vFHwgk9H6CB4+CAonyD4/8c+WubVRcmL/o54VIMlEA4qbUt+69MiJoKObpDzV30b6OAY5QE8vePPsV6IgeON1J9x1r5ddUywJBRO9orKLdlUUJ219PRVC+KGeU90NKpiUVBP28JSyeoxAdYgEsAwQNvePW60IfMChhrr/zVhs92trHvummZYQJ03EWomAwi7aJafrKoWb60elO/ova+ae9XrpmVTH9+fpa8niXb2avVJNSLfIYyhXli3JGefvDBBK859bruH6E5SGLgMvkxmuvoDMtHXTo6Cn+IMx0zIW/e6yNmsem6MPrqqkm18ar9By2KyzJsNpcOfqNQc/baT0OJz1xYYD2dfTzIR+rMucPsJOLl8Nqf3Z7A3eA5S6y6dh6WDiizkKfCSifi7cG4GiwgUN8RR4PVu8D/4fnRhl3OZycVejJC4PBz4Z1/t2Xbqabrr0inreaocncM1cA4pZ/EufNP/bhd9PYxCSda+3k19gSCBA91t7PIbveUVvOWXFW59l4gQxtVafsn8OXd8Tt4fDVeC8iDfdPu0LRb0iZ87uUVfZ7tjVQvsW0ou01GCNdU04WjnCnpbmtWTfnF7wfn1udbyOK03ojohv3OWaod3qGtw9L4LzDocHUgB/Bg0Ut45McNPSZzsFQwM9w66SpoZbrQ+IArAyxAFZAQZ6d7vnEnXTfjx6isy0d/AVouDgRh1H8gTOd9NvWXqrIsVBdXg4VW4xs6uMUHxoxsgENO90c/BNzf1vYqI9Gj4WtuzbU0EfW1SgBNFbWC7GEiJwD4RaAxWKikqKCiPfhd7zucnlC94HPLR2Ue2XA+nlzYIy+efQ8Tbi8VGg1Um2ujaMc5ZiC24kjLi9dmJxmcUSMf5STdU4nX99YT3/18Q9Tvj03LvepkLGjP4kArJyigjz6+0/fTT/99eP0/P43Qt+jBg5F58a8vmXcEWGK6DkUdjBnvhrIEqMdgoz4lDBjH11fSzsri9inPpawX7gOwoljOmJRhs08ey4VzVkpx+943eUa49aO9+Nz8fR0/EVLD3VPzXAZDDo97Focvpugo9lgoXMDfoLrrtxJf/Y/bhO33xjJZAGIexp6NL5P3PleumRjI/32iRfoQndf6G8GXXB+a1riOwLKnTbm59KfrK6g62tK2cUWSUJiuXl1ytE6OR2R2BSjpT03J+K9+D0vN4eGhsf4d7wfSUjwea0LERYNsh53Tjk5jiA6uH7OnH4xEOL73bdcS3su26rhXWUvYgFoABrj9s3r6fUjJ+jFA29S64XukDm9FHDwQfLRj26s4z1+NRpOrBj0es48fGY4MkFmfU3VRYeY8Dteb7vQw7/j/WdGp/jzRRaLph5+WNRDCK8Bpyvk4rwUmJ401FXT2/dcxgk+E+jqm9HmP2WBAMTdClBBo0QDveZtO6ird4DOtLRRd98gj6rTTif5MN+3mHm0PX6mJZRwBGsHPdMuHhlnvLGN+uFgy+xQ/zh1Tc9ECMC2TevmfT8E7IVX3+R/G3jVfYbz699WX0Fane7FaI+EoUgYEr4ugQQecLWeckxzMA8c582x2ai0pJCqK8to/drVVLuqIu6nL7MRsQA0Bo0UjRU/Kuj82IzDqIy//+SXj9FTLxzkvyKO3sG+UXqpZ4RuqC3VJIQWxATn9R9t64sYwnBSbtO6NfN+BolQ8PeR0Qn+HZ/DnvvVVcVsmWgRghwefEiDfmRwPCIJyJU7t9JdH/gTjvDjw44F/CCSf6Y/K9QmGxyBkl6RaMxG3g4M3sp1V+4ik5Iqh3PmBwL0kzOd1IN5cYzbWWqyzJ+f6+ajsuEHZa7atY0X++Yjz55DV+3aHvoLPofP43s4GWqMpYjn6p5y0gOnL/Dzql6TKIfrr9yt3LuOy0kCeiQOKekkgPk2pgsqmBcjv903j7Zy+C/rPKve0aCumD/W2ke/bumN6PwFebl083WLu8redN0eys+bFQh8Ht/zu9Y+/t6VujrjefBc3zraSh1TzghvSZRDXU3K5e7LmrlGtghAylXo+965l+e4Khgh4RiEDMRwkMldxtkCnXKWAKb/L8710HePt4e20VTuuG3vRdt/c8GBpzveuTf0qpqe+9+Ot/O2Hb7fsozU6Lh/PAee56uvN/PzhVs4eP73hV1PSDxiASQJpK3+2IduJ2PYaA+HoNcHxuhvXj1Ff+wM5iHA4Rd0PJ3S0cN/9Hx0OJhPHymy/+lwC33/RDub2OGd/4pdW2nvVbujetAbrt7N71cxKFMUfC++H9dRr6nXzX9fuF/cN8Bz4HleHxwLOTwBPDeePzwNe4qQVSuNGfGw3d3d0b415cLFPv3CAfrxL38f8RqcgjDOIqnG3ppS2lqSR8VWs9KpgxsbWJPDFmLLmIP2943Q893D7LxjUZJxqmxe30D3fOIjlJtjm+/y8+KYdtK3//NBOtXcFvqz6qVYYjXTtdUldFVlMTUW5vKIrlcd9ynAgUyQ3uvY8CQ92zVEhwfHIzIGqdz9gXfRjamZwSeqPlFdXR3/O0kAIgApAETgZ4/sI2/Y/r/a4RCAE3EAa+w2qrBZOF6A1xegYZeH/fUHZ9yceWe+3PtbNzXS/7r7AytylR2fnKLv/fhXdPx0S8Tr6jkFmPaIyY/7KrGaeNR3ev3U73TxfY24PCwGcwUJI/+f3nFrWnd+EgFILZYhAJSqInD4+Gn68S8eo6GR8YjX4cSHEVTNiKPefLhL8XxrBTdft4c+/J5bQrsNK8Hj8dJDjz5BTz5/4KJPcyAQvi+aTVsWui8d39fc2yotLqC7P3h7PKP2xIoIQDqyTAGgVBWB0fFJevSJ5+ilA4cjMhEth8bVNXw2fsclGzW7r8PHz9Cj+56jlvauFX3eYjbRNXt20HtuuY6KClI2Ys+y+oIIQAqRKQKg0tHVyy7Fh46evMgimA9Ew1nXUE9Xv+1S2rVtExmN2vt3eb1eeuPYaRan5tYOckzPLPkZnDLEWX1s9WHrM4VZdj8QAUghViAAlOoiAKadM9zZLnT3Ut/ACMcggFkOj8LcXBuVlxRTdVU5Na2pTWg0nP7BYWpuvUA9fYM0MDxCDoeTPfgw3SjMz6PK8mKqq65iUcqxWaP4xqQjApDOrFAAKB1EQIg7K+oDmSIA4gcgZDNZf7oo2wUg6xuAkN1kuwCQiEDWkvX1TiIAQpYinV9BBCCINIjsQeo6DBGAWaRhCFmHCEAkIgKZjdTvHEQALkYaSWYi9ToPIgDzI40ls5D6XAARgIWRRpMZSD0uggjA4kjjSW+k/pZABGBppBGlJ1JvUSACEB3SmNILqa8oEQGIHmlU6YHU0zIQAVge0rhSG6mfZSICsHykkaUeOqmXlSECsDKksaUOUhcxIAKwcmTUST5S/jEiAhA70ggTj4ivRogAaIM0yMQh5awhIgDaIo0zvkj5aoz2AeQFtZFKxGHtkI4fJ8QCiB/SaGNHplZxRiyA+CLWwMqQTp8gxAJIDDKSRY+UUwIRCyCxiEWwMNLxk4AIQHIQIQginT7JiAAkl2wVAun4KYIIQGoQ3iEyVQyk06cgIgCpR6aJgXT8FEYEILVJRzGQDp9GiACkD/N1rFQQBenwaYwIQHqTaFGQzi4IgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgpA4iOj/A3xGrDL56eWTAAAAAElFTkSuQmCC"/>
        </defs>
      </svg>
      <span class="text-xl text-white font-bold tracking-wide hidden displayed"
          >WiseLet</span
      >
    </a>
    <button
        class="text-white inline-flex p-3 hover:bg-blue-600 rounded lg:hidden ml-auto hover:text-white outline-none nav-toggler"
        data-target="#navigation"
    >
        <i class="material-icons iconic">menu</i>
    </button>
<!-- Navbar List -->
    <div
        class="hidden top-navbar items-center w-full lg:inline-flex!important lg:flex-grow lg:w-auto"
        id="navigation"
    >
      <div
          class="lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start  flex flex-col lg:h-auto"
      >
        <a
            href="/public/index.html"
            class="lg:inline-flex lg:mx-6 lg:w-auto w-full px-3 py-2 rounded text-white items-center justify-center hover:border-4 hover:border-light-blue-500 hover:text-white"
        >
          <span>Home</span>
        </a>
        <a
            href="#"
            class="lg:inline-flex  lg:mx-6 lg:w-auto w-full px-3 py-2 rounded text-white items-center justify-center hover:bg-blue-600 hover:text-white"
        >
            <span>About</span>
        </a>
        <a
            href="#"
            class="lg:inline-flex lg:mx-6  lg:w-auto w-full px-3 py-2 rounded text-white items-center justify-center hover:bg-blue-600 hover:text-white"
        >
          <span>Services</span>
        </a>
        <div class="lg:ml-60 text-center items-center">
          <a
            href="#"
            class="lg:inline-flex lg:mx-6 lg:w-auto w-full px-2 py-2 rounded text-white items-center justify-center"
          >
            <img src="../Assets/icons8-poland-48.png" alt="Polish">
          </a>
          </div>
          <a href="logout.php">
              <span>Logout</span>
          </a>

      </div>
    </div>
  </nav>
  <div class="container">
  <div>
    <h1 class="text-center font-bold text-3xl text-blue-8 00 p-4"><?php echo "Hello ".$_SESSION['name']." "?><i class="far fa-grin-beam"></i></h1>
    <h2 class="mb-36 lg:mb-6 md:mb-12 text-center ">Your today's stats are here!</h2>
      <?php
      if (isset($_SESSION['connect_error'])){
          echo $_SESSION['connect_error'];
      }
      ?>
  </div>
<!-- component -->
<div class="flex items-center h-36 text-gray-800">
  <div class="p-4 w-full">
    <div class="grid grid-cols-12 gap-4">
      <div class="col-span-12 sm:col-span-6 md:col-span-3">
        <div class="flex flex-row bg-white shadow-sm rounded p-4">
          <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-blue-100 text-blue-400">
            <svg width="24" height="24" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0)">
              <path d="M29.7842 0H31.6077V10.9412H29.7842V0Z" fill="#04303E"/>
              <path d="M27.9606 0H29.7842V10.9412H27.9606V0Z" fill="#07485E"/>
              <path d="M29.7842 1.82349H40.7254V5.47055H29.7842V1.82349Z" fill="#B3D1D6"/>
              <path d="M18.8431 1.82349H29.7843V5.47055H18.8431V1.82349Z" fill="#E5EAEE"/>
              <path d="M57.1371 34.6471V36.4706H44.3724V34.6471C44.3724 32.6363 42.7361 31 40.7254 31H29.7842V9.11768H37.0783V15.2411C37.0783 16.0337 37.3883 16.7765 37.9512 17.3333C38.514 17.8901 39.2592 18.1928 40.0519 18.1843L40.667 18.177C49.7494 18.177 57.1371 25.5659 57.1371 34.6471Z" fill="#B3D1D6"/>
              <path d="M29.7842 9.11768V31H9.72534V18.2353H19.0448C20.9449 18.2353 22.49 16.6902 22.49 14.7901V9.11768H29.7842Z" fill="#E5EAEE"/>
              <path d="M59.5685 53.4901C59.5685 58.1826 55.7513 61.9999 51.0587 61.9999L48.9313 51.0587L51.0587 39.8975L52.396 41.3417C52.4677 41.4183 54.1563 43.2467 55.8692 45.5686C58.3589 48.9422 59.5685 51.5328 59.5685 53.4901Z" fill="#6AA8FF"/>
              <path d="M51.0588 39.8975V61.9999C46.3662 61.9999 42.549 58.1826 42.549 53.4901C42.549 51.5328 43.7586 48.9422 46.2483 45.5686C47.9612 43.2467 49.6498 41.4183 49.7215 41.3417L51.0588 39.8975Z" fill="#7ED7F5"/>
              <path d="M7.36015 12.7646H2.43127V36.4705H7.36015C10.6753 36.4705 13.3724 33.7734 13.3724 30.4582V18.7768C13.3724 15.4618 10.6753 12.7646 7.36015 12.7646Z" fill="#B3D1D6"/>
              </g>
              <defs>
              <clipPath id="clip0">
              <rect width="62" height="62" fill="white"/>
              </clipPath>
              </defs>
              </svg>
          </div>
          <div class="flex flex-col flex-grow ml-4">
            <div class="text-sm text-gray-500"> Used</div>
            <div class="font-bold text-lg" id="wr-used"></div>
          </div>
        </div>
      </div>
      <div class="col-span-12 sm:col-span-6 md:col-span-3">
        <div class="flex flex-row bg-white shadow-sm rounded p-4">
          <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-green-100 text-green-500">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0)">
              <path d="M4.03652 0C3.78589 0 3.58497 0.208093 3.59405 0.458592C3.83304 7.03973 4.34714 13.0793 5.61273 20.3214H9.03322H12.966H16.3865C17.6565 13.0545 18.1674 7.0095 18.4052 0.458592C18.4143 0.208093 18.2134 0 17.9627 0L4.03652 0Z" fill="#E5EEF9"/>
              <path d="M5.6123 20.3214V21.336C5.6123 21.7027 5.90959 22 6.27629 22H15.7693C16.136 22 16.4332 21.7027 16.4332 21.336V20.3214H5.6123Z" fill="#D5E3F4"/>
              <path d="M5.24512 6.50797C5.55582 10.8271 6.03291 14.8037 6.73306 18.9934H15.2665C15.9667 14.8032 16.4438 10.827 16.7544 6.50797H5.24512Z" fill="#98BCE5"/>
              <path d="M17.9628 0H16.2061C16.4567 0 16.6576 0.208093 16.6486 0.458547C16.4107 7.0095 15.8998 13.0545 14.6299 20.3214H16.3866C17.6565 13.0545 18.1674 7.00946 18.4053 0.458547C18.4143 0.208093 18.2134 0 17.9628 0V0Z" fill="#D5E3F4"/>
              <path d="M14.6767 20.3214V21.336C14.6767 21.7027 14.3794 22 14.0127 22H15.7694C16.1361 22 16.4334 21.7027 16.4334 21.336V20.3214H14.6767Z" fill="#B3CEEC"/>
              <path d="M14.9978 6.50797C14.6871 10.8271 14.21 14.8033 13.5098 18.9934H15.2664C15.9667 14.8032 16.4438 10.827 16.7544 6.50797H14.9978Z" fill="#7BACDF"/>
              </g>
              <defs>
              <clipPath id="clip0">
              <rect width="22" height="22" fill="white"/>
              </clipPath>
              </defs>
              </svg>

          </div>
          <div class="flex flex-col flex-grow ml-4">
            <div class="text-sm text-gray-500">Glasses</div>
            <div class="font-bold text-lg" id="wr-glass"></div>
          </div>
        </div>
      </div>
      <div class="col-span-12 sm:col-span-6 md:col-span-3">
        <div class="flex flex-row bg-white shadow-sm rounded p-4">
          <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-orange-100 text-orange-500">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
          </div>
          <div class="flex flex-col flex-grow ml-4">
            <div class="text-sm text-gray-500">Bottles</div>
            <div class="font-bold text-lg" id="wr-bottle"></div>
          </div>
        </div>
      </div>
      <div class="col-span-12 sm:col-span-6 md:col-span-3">
        <div class="flex flex-row bg-white shadow-sm rounded p-4">
          <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-red-100 text-red-500">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
          </div>
          <div class="flex flex-col flex-grow ml-4">
            <div class="text-sm text-gray-500">Saved</div>
            <div class="font-bold text-lg" id="wr-money"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <div>
      <canvas id="chart"></canvas>
    </div>
<h1 class="text-center mt-28 md:mt-8 font-bold text-2xl p-4">Pros and hints!</h1>
  <div class="bg-white rounded-lg p-3 flex flex-col justify-center items-center md:items-start shadow-lg mb-4">
    <div class="flex flex-row justify-center mr-2">
      <img alt="avatar" width="48" height="48" class="rounded-full w-10 h-10 mr-4 shadow-lg mb-4" src="https://cdn1.iconfinder.com/data/icons/technology-devices-2/100/Profile-512.png">
      <h3 class="text-purple-600 font-semibold text-lg text-center md:text-left ">Water Used Daily</h3>
    </div>
  <p style="width: 90%" class="text-gray-600 text-lg text-center md:text-left ">We're proud of you. Used only 10 galoons of water!</p>
  </div>
  <div class="bg-white rounded-lg p-3 flex flex-col justify-center items-center md:items-start shadow-lg mb-4">
    <div class="flex flex-row justify-center mr-2">
      <img alt="avatar" width="48" height="48" class="rounded-full w-10 h-10 mr-4 shadow-lg mb-4" src="https://cdn1.iconfinder.com/data/icons/technology-devices-2/100/Profile-512.png">
      <h3 class="text-purple-600 font-semibold text-lg text-center md:text-left ">Water Used Daily</h3>
    </div>
  <p style="width: 90%" class="text-gray-600 text-lg text-center md:text-left ">We're proud of you. Used only 10 galoons of water!</p>
  </div>
  <div class="bg-white rounded-lg p-3 flex flex-col justify-center items-center md:items-start shadow-lg mb-4">
    <div class="flex flex-row justify-center mr-2">
      <img alt="avatar" width="48" height="48" class="rounded-full w-10 h-10 mr-4 shadow-lg mb-4" src="https://cdn1.iconfinder.com/data/icons/technology-devices-2/100/Profile-512.png">
      <h3 class="text-purple-600 font-semibold text-lg text-center md:text-left ">Water Used Daily</h3>
    </div>
  <p style="width: 90%" class="text-gray-600 text-lg text-center md:text-left ">We're proud of you. Used only 10 galoons of water!</p>
  </div>
  <div class="bg-white rounded-lg p-3 flex flex-col justify-center items-center md:items-start shadow-lg mb-4">
    <div class="flex flex-row justify-center mr-2">
      <img alt="avatar" width="48" height="48" class="rounded-full w-10 h-10 mr-4 shadow-lg mb-4" src="https://cdn1.iconfinder.com/data/icons/technology-devices-2/100/Profile-512.png">
      <h3 class="text-purple-600 font-semibold text-lg text-center md:text-left ">Water Used Daily</h3>
    </div>
  <p style="width: 90%" class="text-gray-600 text-lg text-center md:text-left ">We're proud of you. Used only 10 galoons of water!</p>
  </div>
</div>
   <!-- Script -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
   <script>
     $(document).ready(function() {
     $(".nav-toggler").each(function(_, navToggler) {
       var target = $(navToggler).data("target");
       $(navToggler).on("click", function() {
         $(target).animate({
           height: "toggle"
         });
       });
     });
   });
   </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script>
      const chartConfig = {
          type: 'line',
          data: {
              labels: [],
              datasets: [{
                  label: 'Zużytych litrów',
                  backgroundColor: 'rgb(255, 99, 132)',
                  borderColor: 'rgb(255, 99, 132)',
                  data: []
              }]
          },
          options: {}
      };

      function refreshData() {
          fetch("api/baseget.php")
              .then(response => response.json())
              .then(json => {
                  setChartData(json);
                  setData(json);
              })
              .catch(console.error)
      }

      function setData(response) {
          const flow = response.reduce((previous, {Flow}) => previous + +Flow, 0);
          document.getElementById("wr-used").innerHTML = flow + ' l';
          document.getElementById("wr-glass").innerHTML = flow * 0.25;
          document.getElementById("wr-bottle").innerHTML = Math.round(flow * 0.70);
          document.getElementById("wr-money").innerHTML = Math.round(flow * 0.0012 * 100) / 100 + ' $';
      }

      function setChartData(response) {
        chartConfig.data.datasets[0].data = response.map(obj => +obj.Flow);
        chartConfig.data.labels = response.map(obj => obj.DateTime);
        window.chart.update();
      }

      window.chart = new Chart(document.getElementById('chart').getContext('2d'), chartConfig);
      refreshData();
      setInterval(() => refreshData(), 5000);
    </script>
   </main>
   </body>
   </html>
