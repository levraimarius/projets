window.onload = function()
{
    var canvasWidth = 900;
    var canvasHeight = 600;
    var blockSize = 30;
    var ctx;
    var delay = 100;
    var snakee;
    var applee;
    var widthInBlocks = canvasWidth/blockSize;
    var heightInBlocks = canvasHeight/blockSize;
    var score;
    var verifScore;
    var level;
    var timeout;
    var checkMenu = false;

    init();

    function init()
    { 
        var canvas = document.createElement('canvas');
        canvas.width = canvasWidth;
        canvas.height = canvasHeight;
        canvas.style.border = "30px solid gray";
        canvas.style.margin = "50px auto";
        canvas.style.display = "block";
        canvas.style.backgroundColor = "#ddd";
        document.body.appendChild(canvas);
        ctx = canvas.getContext('2d');
        snakee = new Snake([[6,4], [5,4], [4,4]], "right");
        applee = new Apple([10, 10]);
        score = 0;
        level = 0;
        verifScore = 0;
        menu();
    }

    function refreshCanvas()
    {

        snakee.advance();
        if(snakee.checkCollision() || checkMenu === true)
        {
            if (checkMenu === true)
            {
                menu();
            }
            else
            {
                gameOver();
            }
        }
        else
        {
            if(verifScore === 10)
            {

                level = level +1;
                wantToContinu();

            }
            else
            {
                if (snakee.isEatingApple(applee))
                {
                    score++;
                    verifScore++;
                    snakee.ateApple = true;
                    do
                    {
                        applee.setNewPosition();
                    }
                    while(applee.isOnSnake(snakee))
                }
                ctx.clearRect(0,0,canvasWidth, canvasHeight);
                    drawScore();
                    snakee.draw();
                    applee.draw();
                    timeout = setTimeout(refreshCanvas,delay);
                }

            }
        }


        function gameOver()
        {
            ctx.save();
            ctx.font = "bold 70px sans-serif";
            ctx.fillStyle = "#000";
            ctx.textAlign = "center";
            ctx.textBaseline = "middle";
            ctx.strokeStyle = "white";
            ctx.lineWidth = 5;
            var centreX = canvasWidth / 2;
            var centreY = canvasHeight / 2;
            ctx.strokeText("Game Over", centreX, centreY - 180);
            ctx.fillText("Game Over", centreX, centreY - 180);
            ctx.font = "bold 30px sans-serif";
            ctx.strokeText("Votre score est de "+score, centreX, centreY - 120);
            ctx.fillText("Votre score est de "+score, centreX, centreY - 120);
            ctx.strokeText("Vous avez atteint le Niveau "+level, centreX, centreY - 80);
            ctx.fillText("Vous avez atteint le Niveau "+level, centreX, centreY - 80);
            ctx.strokeText("Appuyez sur la touche 'Q' pour rejouer.", centreX, centreY + 120);
            ctx.fillText("Appuyez sur la touche 'Q' pour rejouer.", centreX, centreY + 120);
            ctx.strokeText("Appuyez sur la touche 'T' pour accéder au menu.", centreX, centreY + 150);
            ctx.fillText("Appuyez sur la touche 'T' pour accéder au menu.", centreX, centreY + 150);
            ctx.restore();
        }

        function wantToContinu()
        {
            ctx.save();
            ctx.font = "bold 30px sans-serif";
            ctx.fillStyle = "#000";
            ctx.textAlign = "center";
            ctx.textBaseline = "middle";
            ctx.strokeStyle = "white";
            ctx.lineWidth = 5;
            var centreX = canvasWidth / 2;
            var centreY = canvasHeight / 2;
            ctx.strokeText("Vous avez atteint le", centreX, centreY - 180);
            ctx.fillText("Vous avez atteint le", centreX, centreY - 180);
            ctx.font = "bold 70px sans-serif";
            ctx.strokeText("Niveau "+level, centreX, centreY - 120);
            ctx.fillText("Niveau "+level, centreX, centreY - 120);
            ctx.font = "bold 30px sans-serif";
            ctx.strokeText("Appuyez sur la touche 'Espace' pour continuer", centreX, centreY + 110);
            ctx.fillText("Appuyez sur la touche 'Espace' pour continuer", centreX, centreY + 110);
            ctx.strokeText("ou sur la touche 'Q' pour rejouer.", centreX, centreY + 150);
            ctx.fillText("ou sur la touche 'Q' pour rejouer.", centreX, centreY + 150);
            ctx.strokeText("Appuyez sur la touche 'T' pour accéder au menu.", centreX, centreY + 190);
            ctx.fillText("Appuyez sur la touche 'T' pour accéder au menu.", centreX, centreY + 190);
            ctx.restore();

        }

        function menu()
        {
            ctx.save();
            ctx.clearRect(0,0,canvasWidth, canvasHeight);
            ctx.font = "bold 70px sans-serif";
            ctx.fillStyle = "#000";
            ctx.textAlign = "center";
            ctx.textBaseline = "middle";
            ctx.strokeStyle = "white";
            ctx.lineWidth = 5;
            var centreX = canvasWidth / 2;
            var centreY = canvasHeight / 2;
            ctx.strokeText("MENU DU JEU", centreX, centreY - 180);
            ctx.fillText("MENU DU JEU", centreX, centreY - 180);
            ctx.font = "bold 30px sans-serif";
            ctx.strokeText("Touche", centreX - 184, centreY - 110);
            ctx.fillText("Touche ", centreX - 180, centreY - 110);
            ctx.strokeText("-", centreX, centreY - 110);
            ctx.fillText("-", centreX, centreY - 110);
            ctx.strokeText("Action", centreX + 181, centreY - 110);
            ctx.fillText("Action", centreX + 180, centreY - 110);
            ctx.strokeText("'Q'", centreX - 180, centreY - 50);
            ctx.fillText("'Q'", centreX - 180, centreY - 50);
            ctx.strokeText("Commencer à jouer", centreX + 181, centreY - 50);
            ctx.fillText("Commencer à jouer", centreX + 180, centreY - 50);
            ctx.strokeText("'G'", centreX - 180, centreY + 0);
            ctx.fillText("'G'", centreX - 180, centreY + 0);
            ctx.strokeText("Changer la Vitesse", centreX + 180, centreY + 0);
            ctx.fillText("Changer la Vitesse", centreX + 180, centreY + 0);
            ctx.strokeText("'M'", centreX - 180, centreY + 50);
            ctx.fillText("'M'", centreX - 180, centreY + 50);
            ctx.strokeText("Quitter le jeu", centreX + 180, centreY + 50);
            ctx.fillText("Quitter le jeu", centreX + 180, centreY + 50);
            ctx.restore();

        }

        function snakeSpeed()
        {
            ctx.save();
            ctx.clearRect(0,0,canvasWidth, canvasHeight);
            ctx.font = "bold 50px sans-serif";
            ctx.fillStyle = "#000";
            ctx.textAlign = "center";
            ctx.textBaseline = "middle";
            ctx.strokeStyle = "white";
            ctx.lineWidth = 5;
            var centreX = canvasWidth / 2;
            var centreY = canvasHeight / 2;
            ctx.strokeText("Changement de la vitesse", centreX, centreY - 180);
            ctx.fillText("Changement de la vitesse", centreX, centreY - 180);
            ctx.font = "bold 30px sans-serif";
            ctx.strokeText("Touche", centreX - 184, centreY - 110);
            ctx.fillText("Touche ", centreX - 180, centreY - 110);
            ctx.strokeText("-", centreX, centreY - 110);
            ctx.fillText("-", centreX, centreY - 110);
            ctx.strokeText("Action", centreX + 181, centreY - 110);
            ctx.fillText("Action", centreX + 180, centreY - 110);
            ctx.strokeText("'W'", centreX - 180, centreY - 50);
            ctx.fillText("'W'", centreX - 180, centreY - 50);
            ctx.strokeText("Vitesse lente", centreX + 180, centreY - 50);
            ctx.fillText("Vitesse lente", centreX + 180, centreY - 50);
            ctx.strokeText("'V'", centreX - 180, centreY + 0);
            ctx.fillText("'V'", centreX - 180, centreY + 0);
            ctx.strokeText("Vitesse moyenne", centreX + 180, centreY + 0);
            ctx.fillText("Vitesse moyenne", centreX + 180, centreY + 0);
            ctx.strokeText("'N'", centreX - 180, centreY + 50);
            ctx.fillText("'N'", centreX - 180, centreY + 50);
            ctx.strokeText("Vitesse rapide", centreX + 180, centreY + 50);
            ctx.fillText("Vitesse rapide", centreX + 180, centreY + 50);
            ctx.strokeText("'T'", centreX - 180, centreY + 180);
            ctx.fillText("'T'", centreX - 180, centreY + 180);
            ctx.strokeText("Revenir au menu", centreX + 180, centreY + 180);
            ctx.fillText("Revenir au menu", centreX + 180, centreY + 180);
            ctx.restore();
            document.reload();

        }

        function restart()
        {
            snakee = new Snake([[6,4], [5,4], [4,4]], "right");
            applee = new Apple([10, 10]);
            score = 0;
            verifScore = 0;
            level = 0;
            clearTimeout(timeout);
            refreshCanvas();    
        }

        function continuGame()
        {
            verifScore = 0;
            clearTimeout(timeout);
            refreshCanvas();    
        }

        function drawScore()
        {
            ctx.save();
            ctx.font = "bold 200px sans-serif";
            ctx.fillStyle = "gray";
            ctx.textAlign = "center";
            ctx.textBaseline = "middle";
            var centreX = canvasWidth / 2;
            var centreY = canvasHeight / 2;
            ctx.fillText(score.toString(), centreX, centreY);
            ctx.restore();
        }

        function drawBlock(ctx, position)
        {
            var x = position[0] * blockSize;
            var y = position[1] * blockSize;
            ctx.fillRect(x, y, blockSize, blockSize);
        }

        function Snake(body, direction)
        {
            this.body = body;
            this.direction = direction;
            this.ateApple = false;
            this.draw = function()
            {
                ctx.save();
                ctx.fillStyle = "#ff0000";
                for(var i = 0; i < this.body.length; i++)
                {
                    drawBlock(ctx, this.body[i]);
                }
                ctx.restore();                
            };
            this.advance = function()
            {
                var nextPosition = this.body[0].slice();
                switch(this.direction)
                {
                    case "left":
                        nextPosition[0] -=1;
                        break;
                    case "right":
                        nextPosition[0] +=1;
                        break;
                    case "down":
                        nextPosition[1] +=1;
                        break;
                    case "up":
                        nextPosition[1] -=1;
                        break;
                    default:
                        throw("Direction invalide");
                }
                this.body.unshift(nextPosition);
                if(!this.ateApple)
                {
                    this.body.pop();
                }
                else
                {
                    this.ateApple = false;
                }
            };
            this.setDirection = function(newDirection)
            {
                var allowedDirection;
                switch(this.direction)
                {
                    case "left":
                    case "right":
                        allowedDirection = ["up", "down"];
                        break;
                    case "down":
                    case "up":
                        allowedDirection = ["left", "right"];
                        break; 
                    default:
                        throw("Direction invalide");
                }
                if(allowedDirection.indexOf(newDirection) > -1)
                {
                    this.direction = newDirection;
                }
            };
            this.checkCollision = function()
            {
                var collisionMur = false;
                var snakeCollision = false;
                var head = this.body[0];
                var rest = this.body.slice(1);
                var snakeX = head[0];
                var snakeY = head[1];
                var minX = 0;
                var minY = 0;
                var maxX = widthInBlocks - 1;
                var maxY = heightInBlocks - 1;
                var isNotBetweenHorizontalWalls = snakeX < minX || snakeX > maxX;
                var isNotBetweenVerticalWalls = snakeY < minY || snakeY > maxY;

                if (isNotBetweenHorizontalWalls || isNotBetweenVerticalWalls)
                {
                    collisionMur = true;
                }
                for(var i = 0; i < rest.length; i++)
                {
                    if (snakeX === rest[i][0] && snakeY === rest[i][1])
                    {
                        snakeCollision = true;
                    }
                }
                return collisionMur || snakeCollision;

            };
            this.isEatingApple = function(appleToEat)
            {
                var head = this.body[0]
                if (head[0] === appleToEat.position[0] && head[1] === appleToEat.position[1])
                {
                    return true;
                }
                else
                {
                    return false;
                }
            };
        }

        function Apple(position)
        {
            this.position = position;
            this.draw = function()
            {
                ctx.save();
                ctx.fillStyle = "#33cc33";
                ctx.beginPath();
                var radius = blockSize/2;
                var x = this.position[0]*blockSize + radius;
                var y = this.position[1]*blockSize + radius;
                ctx.arc(x,y, radius, 0, Math.PI*2, true);
                ctx.fill();
                ctx.restore();
            };
            this.setNewPosition = function()
            {
                var newX = Math.round(Math.random() * (widthInBlocks - 1));
                var newY = Math.round(Math.random() * (heightInBlocks - 1));
                this.position = [newX, newY];
            };
            this.isOnSnake = function(snakeToCheck)
            {
                var isOnSnake = false;
                for (var i = 0 ; i < snakeToCheck.body.length; i++)
                {
                    if(this.position[0] === snakeToCheck.body[i][0] && this.position[1] === snakeToCheck.body[i][1])
                    {
                        isOnSnake = true;
                    }
                }
                return isOnSnake;
            };

        }

        function closeApplication(){
            if(confirm('Voulez-vous quitter le jeu ?')){
                window.open('','_parent','');
                window.close();
            }
        }




        document.onkeydown = function handleKeyDown(e)
        {
            var key = e.keyCode;
            var newDirection;
            switch(key)
            {
                case 37:
                    newDirection = "left";
                    break;
                case 38:
                    newDirection = "up";
                    break;
                case 39:
                    newDirection = "right";
                    break;
                case 40:
                    newDirection = "down";
                    break;
                case 32:
                    continuGame();
                    return;
                case 87: // Touche W
                    delay = 200;
                    return; // Touche V
                case 86:
                    delay = 100;
                    return;
                case 78: // Touche N
                    delay = 50;
                    return;
                case 84: // Touche T
                    checkMenu = true;
                    menu();
                    return; 
                case 81: // Touche Q
                    checkMenu = false;
                    restart();
                    return;
                case 71: // Touche G
                    snakeSpeed();
                    return;
                case 77: // Touche M
                    closeApplication()
                    return;
                default:
                    return;

            }
            snakee.setDirection(newDirection);

        }


    }