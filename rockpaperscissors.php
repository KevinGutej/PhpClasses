<?php
function getComputerChoice()
{
    $choices = array('rock', 'paper', 'scissors');
    $randomIndex = array_rand($choices);
    return $choices[$randomIndex];
}

function determineWinner($playerChoice, $computerChoice)
{
    if ($playerChoice == $computerChoice) {
        return "It's a tie!";
    } elseif ($playerChoice == 'rock') {
        if ($computerChoice == 'paper') {
            return 'Computer wins!';
        } else {
            return 'You win!';
        }
    } elseif ($playerChoice == 'paper') {
        if ($computerChoice == 'scissors') {
            return 'Computer wins!';
        } else {
            return 'You win!';
        }
    } elseif ($playerChoice == 'scissors') {
        if ($computerChoice == 'rock') {
            return 'Computer wins!';
        } else {
            return 'You win!';
        }
    } else {
        return 'Invalid input. Please choose rock, paper, or scissors.';
    }
}