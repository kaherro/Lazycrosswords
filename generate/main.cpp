#define _GLIBCXX_FILESYSTEM
#define f(i, n) for(int i = 0; i < int(n); i++)
using ll = long long;
using ull = unsigned long long;
#include <iostream>
#include <vector>
#include <set>
#include <string>
#include <bits/stdc++.h>
#include <map>
#include <algorithm>
#include <locale>
#include <Windows.h>
#include <fstream>
using namespace std;

const ll N = 400;

vector<vector<char>> board_ans;
ll maxi = 1;
string dir;
bool cmp(string first, string second) {
    if(first.length() == second.length()) {
        return first < second;
    }
    else return first.length() > second.length();
}

bool possible_hor(string word, vector<vector<char>> &board, ll x, ll y, ll j) {

    bool ok = true;
    ll q = 0;
    if(board[x][y - j - 1] != '.') return false;
    if(board[x][y - j + word.size()] != '.') return false;
    for(ll i = y - j; i < y - j + word.size(); i++) {
        if(board[x][i] == '.' && board[x - 1][i] == '.' && board[x + 1][i] == '.') {
            q++;
            continue;
        }
        else if(board[x][i] == word[q] && board[x][i + 1] == '.' && (board[x - 1][i] != '.' || board[x + 1][i] != '.')) {
            q++;
            continue;
        }
        else return false;
    }
    return true;
}

bool possible_ver(string word, vector<vector<char>> &board, ll x, ll y, ll j) {

    bool ok = true;
    ll q = 0;
    if(board[x - j - 1][y] != '.') return false;
    if(board[x - j + word.size()][y] != '.') return false;
    for(ll i = x - j; i < x - j + word.size(); i++) {
        if(board[i][y] == '.' && board[i][y - 1] == '.' && board[i][y + 1] == '.') {
            q++;
            continue;
        }
        else if(board[i][y] == word[q] && board[i + 1][y] == '.' && (board[i][y - 1] != '.' || board[i][y + 1] != '.')) {
            q++;
            continue;
        }
        else return false;
    }
    return true;
}



ll qqq = 0;
void generate(vector<string> &words, vector<vector<char>> board, ll l, map<char, set<pair<ll, ll>> > letters, ll cnt) {
    qqq++;
    if(qqq > 5000) return;
    for(ll i = l; i < words.size(); i++) {
        if(maxi == words.size()) break;
        for(ll j = 0; j < words[i].size(); j++) {
            for(auto b : letters[words[i][j]]) {
                if(possible_hor(words[i], board, b.first, b.second, j)) {
                    ll x = b.first, y = b.second, q = 0;
                    vector<vector<char>> board_ = board;
                    map<char, set<pair<ll, ll>> > letters_ = letters;
                    for(ll w = y - j; w < y - j + words[i].size(); w++) {
                        board_[x][w] = words[i][q];
                        letters_[words[i][q]].insert({x, w});
                        q++;
                    }
                    generate(words, board_, i + 1, letters_, cnt + 1);
                }
                if(possible_ver(words[i], board, b.first, b.second, j)) {
                    ll x = b.first, y = b.second, q = 0;
                    vector<vector<char>> board_ = board;
                    map<char, set<pair<ll, ll>> > letters_ = letters;
                    for(ll w = x - j; w < x - j + words[i].size(); w++) {
                        board_[w][y] = words[i][q];
                        letters_[words[i][q]].insert({w, y});
                        q++;
                    }
                    generate(words, board_, i + 1, letters_, cnt + 1);
                }
            }
        }
    }

    if(cnt > maxi) {
        maxi = cnt;
        board_ans = board;
    }
}
ll firsty = 0, lasty = N - 1;
ll firstx = 0, lastx = N - 1;
vector<string> words;
map<string, string> values;

void input() {
    ifstream file1("input.txt");
    file1 >> dir;

    ll n;
    file1 >> n;

    string s;
    getline(file1, s);
    f(i, n) {
        //file1 >> s;
        getline(file1, s);
        //cout << s << '\n';;
        string word = "", value ="";
        ll j = 0;
        while(j < s.length() && s[j] != '-') {
            if(s[j] <= 90 && s[j] >= 65) s[j] ^= 32;
            if(s[j] <= -33 && s[j] >= -64) s[j] ^= 32;
            word += s[j];
            j++;
        }
        j++;
        words.push_back(word);
        while(j < s.length()) {
            value += s[j];
            j++;
        }
        values[word] = value;
    }
    //for(auto i : words) cout << i << '\n';

}
void generatee() {

    default_random_engine randEngine(static_cast<uint32_t>(chrono::high_resolution_clock::now().time_since_epoch().count()));

    vector<vector<char>> ex(N);
    f(i, N) {
        f(j, N) ex[i].push_back('.');
    }

    f(i, 1000) {
        if(qqq > 5000) break;
    shuffle(words.begin(), words.end(), randEngine);

        map<char, set<pair<ll, ll>> > letters;
        vector<vector<char>> board;
    f(i, words.size()) {
        map<char, set<pair<ll, ll>> > letters;
        vector<vector<char>> board;
        board = ex;
        for(ll j = 0; j < words[i].size(); j++) {
            letters[words[i][j]].insert({N / 2, N / 2 + j});
            board[N / 2][N / 2 + j] = words[i][j];
        }
        if(maxi < words.size()) generate(words, board, i + 1, letters, 1);
    }
    generate(words, ex, 1, letters, 1);
    }
    while(count(board_ans[firstx].begin(), board_ans[firstx].end(), '.') == N) firstx++;
    while(count(board_ans[lastx].begin(), board_ans[lastx].end(), '.') == N) lastx--;

    for(firsty = 0; firsty < N; firsty++) {
        bool tr = true;
        f(i, N) {
            if(board_ans[i][firsty] != '.') {
                tr = false;
                break;
            }
        }
        if(!tr) break;
    }
    for(lasty = N - 1; lasty >= 0; lasty--) {
        bool tr = true;
        f(i, N) {
            if(board_ans[i][lasty] != '.') {
                tr = false;
                break;
            }
        }
        if(!tr) break;
    }
}
vector<string> listt;
void grid() {
    string sdir = dir + "/grid.php";
    ofstream file2(sdir);
    file2 << "<?php session_start();if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?><!DOCTYPE html><html><head></title>	<link rel='stylesheet' type='text/css' href='style.css'></head><body>     <a class='logout' href='../../logout.php'>выйти</a></body></html><?php }else{     header('Location: ../../login_.php');     exit();} ?>\n";
    file2 << "<!DOCTYPE html><html><head><link rel='stylesheet' type='text/css' href='style.css'></head><html>\n";
    file2 << "<form action='' method='post'>\n";
    ll q = 0, s = 0, num = 1;
    for(ll i = firstx; i <= lastx; i++) {
        for(ll j = firsty; j <= lasty; j++) {
            q++;
            if(board_ans[i][j] != '.') {
                s++;
                char xx = board_ans[i][j] ^ 32;
                file2 << "<input maxlength='1' style='<?php $answer" << q << " = $_POST['q" << q << "']; if ($answer" << q << " == '" << board_ans[i][j] << "' || $answer" << q << " == '" << xx << "') echo " << '"' << "background: #8fff80" << '"' << "; else if($answer" << q << " != '') echo " << '"' << "background: #ff6969" << '"' << "?>' class='field" << q << "' type='text' name='q" << q << "' value='<?php if(isset($_POST['q" << q << "'])) echo $_POST['q" << q << "']; ?>'>";
            }
            if(board_ans[i][j] != '.' && board_ans[i][j - 1] == '.' && board_ans[i][j + 1] != '.' ) {
                file2 << "<a class='num" << num << "'>" << num << "</a>";
                num++;
            }
            if(board_ans[i][j] != '.' && board_ans[i - 1][j] == '.' && board_ans[i + 1][j] != '.' ) {
                file2 << "<a class='num" << num << "'>" << num << "</a>";
                num++;
            }
        }
    }
    file2 << "<br>" << "<button type='submit' value='Submit' class='submitbtn'>Проверить</button>\n" << "</form><p><a href='../../start_page.php'><img src='../../3.gif' class='picture' a></p>\n";

    file2 << "<?php\n" << "error_reporting(0);\n$name=file_get_contents('name.txt'); echo " << '"' << "<a class='namee'>$name</a>" << '"' << ";" << "$totalCorrect = 0;\n";
    q = 0;
    for(ll i = firstx; i <= lastx; i++) {
        for(ll j = firsty; j <= lasty; j++) {
            q++;
            if(board_ans[i][j] != '.') {
                //s++;
                char xx = board_ans[i][j] ^ 32;
                file2 << "$answer" << q << " = $_POST['q" << q << "'];\n";
                file2 << "if ($answer" << q << " == '" << board_ans[i][j] << "' || $answer" << q << " == '" << xx << "') { $totalCorrect++; }\n";
            }
        }
    }
    file2 << "echo " << '"' << "<div class='questions'>Вопросы</div><br> " << '"' << ";\n";
    for(ll i = 0; i < listt.size(); i++) {
        file2 << "echo " << '"' << "<div class='question'>" << i + 1 << ". " << values[listt[i]] << "</div>" << '"' << ";\n";
    }

    //file2 << "echo " << '"' << "<div id='results'> $totalCorrect / " << s << " correct</div>" << '"' << ";\n" << "return 0\n" << "?>";
    file2 << "echo "<< '"' << "<div class='stats'>Статистика:</div> "<< '"' << ";$res = file_get_contents('users.json');$data = json_decode($res, true); $trys = file_get_contents('trys.txt'); $j = -1;$qq;for($i = 0; $i < count($data); $i++) {    if($data[$i]['name'] == $_SESSION['user_name']) {   $qq = $i;      if($data[$i]['trys'] >= 1) $j = $i;         else $j = -2;     }}if($j >= 0) {    $data[$j]['trys'] = $data[$j]['trys'] - 1;     if($data[$j]['resault'] < $totalCorrect) $data[$j]['resault'] = $totalCorrect;}else if($j == -1) {   $a = $data[0];    $a['name'] = $_SESSION['user_name'];    $a['trys'] = $trys;    $a['resault'] = $totalCorrect;    $data[] = $a; $qq = count($data) - 1;}$jsonData = json_encode($data); file_put_contents('users.json', $jsonData);if($j >= -1) echo " << '"' << "<div class='curres'> $totalCorrect / " << s << " correct</div>" << '"' << ";else echo '<div class=" << '"' << "nomore" << '"' << "> Количество ваших попыток закончилось! </div>';echo '<br>';for($i = 1; $i < count($data); $i++) {    $user=$data[$i]['name']; $res=$data[$i]['resault']; echo " << '"' << "<div class='resaults'>$user: $res<br></div>" << '"' << ";$trys_curr = $data[$qq]['trys']; echo " << '"' << "<div class='trys-left'>$trys_curr попытки(-ок) осталось<br></div>" << '"' << ";}\n";
    file2 << "?>";
    file2.close();
}

void grid_keys() {
    string sdir = dir + "/grid_keys.php";
    ofstream file3(sdir);

    file3 << "<?php session_start();error_reporting(0);$dir = dirname(__FILE__);$name = file_get_contents('author.txt'); if (isset($_SESSION['id']) && isset($_SESSION['user_name']) && ($name == '' || $name ==$_SESSION['user_name']) && $dir != 'I:\XAMPP\htdocs') { ?><!DOCTYPE html><html><head>	<title>Lazycrosswords</title>	<link rel='stylesheet' type='text/css' href='style.css'></head><body>     <a href='../../logout.php' class='logout'>выйти</a></body></html><?php }else{     header('Location: ../../start_page.php');     exit();} ?>\n";

    ll q = 0, num = 1;
    for(ll i = firstx; i <= lastx; i++) {
        for(ll j = firsty; j <= lasty; j++) {
            q++;
            if(board_ans[i][j] != '.') {
                file3 << "<input class='field" << q << "' type='text' name='q" << q << "' value='<?php echo '" << board_ans[i][j] << "' ?>'>\n";
            }
            if(board_ans[i][j] != '.' && board_ans[i][j - 1] == '.' && board_ans[i][j + 1] != '.' ) {
                string w = "";
                ll y = j;
                while(y <= lasty && board_ans[i][y] != '.') {
                    w += board_ans[i][y];
                    y++;
                }
                listt.push_back(w);
                file3 << "<a class='num" << num << "'>" << num << "</a>";
                num++;
            }
            if(board_ans[i][j] != '.' && board_ans[i - 1][j] == '.' && board_ans[i + 1][j] != '.' ) {
                string w = "";
                ll x = i;
                while(x <= lastx && board_ans[x][j] != '.') {
                    w += board_ans[x][j];
                    x++;
                }
                listt.push_back(w);
                file3 << "<a class='num" << num << "'>" << num << "</a>";
                num++;
            }
        }
    }/*
    for(ll i = 0; i < listt.size(); i++) {
        file3 << i + 1 << ". " << values[listt[i]] << "<br>\n";
    }*/
    file3.close();
}
void style() {
    string sdir = dir + "/style.css";
    ofstream file4(sdir);
    file4 << "textarea{font-size:2px;padding-left: 12px;}body{    background: #C1E6FF;    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;    font-style: normal;}.crossname{    position: absolute;    width: 305px;    height: 38px;    left: 59px;    top: 57px;    font-weight: 500;    font-size: 28px;    line-height: 33px;}.inputname{ font-size:28px;padding-left: 12px;   box-sizing: border-box;    position: absolute;    width: 630px;    height: 60px;    left: 59px;    top: 95px;    background: #FFFFFF;    border: 3px solid #DADADA;    border-radius: 9px;}.inputsize{  font-size:28px;padding-left: 12px;  box-sizing: border-box;    position: absolute;    width: 90px;    height: 60px;    left: 295px;    top: 273px;    background: #FFFFFF;    border: 3px solid #DADADA;    border-radius: 9px;}.size{    position: absolute;    width: 500px;    height: 48px;    left: 59px;    top: 275px;    font-weight: 500;    font-size: 28px;    line-height: 33px;}.trys{    position: absolute;    width: 492px;    height: 48px;    left: 59px;    top: 196px;    font-weight: 500;    font-size: 28px;    line-height: 33px;}.inputtrys{  font-size:28px;padding-left: 12px;  box-sizing: border-box;    position: absolute;    width: 90px;    height: 60px;    left: 551px;    top: 184px;    background: #FFFFFF;    border: 3px solid #DADADA;    border-radius: 9px;}.save{    box-sizing: border-box;    position: absolute;    width: 630px;    height: 60px;    left: 59px;    top: 890px;    background: #FFFFFF;    border: 3px solid #DADADA;    border-radius: 9px;    font-weight: 500;    font-size: 28px;    line-height: 33px;    background: #C1E6FF;    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;    font-style: normal;}.words{    position: absolute;    width: 100px;    height: 38px;    left: 59px;    top: 338px;    font-weight: 500;    font-size: 28px;    line-height: 33px;}.inputwords{  font-size:28px;padding-left: 12px;  box-sizing: border-box;    position: absolute;    width: 630px;       height: 500px;    left: 59px;    top: 376px;    background: #FFFFFF;    border: 3px solid #DADADA;    border-radius: 9px;}.username{    position: absolute;    /*width: 163px;    height: 25px;*/    left: 95.3%;    top: 0px;    font-weight: 500;    font-size: 28px;}.logout{    position: absolute;    /*width: 163px;    height: 25px;*/    right: 10px;    top: 30px;    font-weight: 500;    font-size: 28px;    line-height: 33px;}.group1{    position: absolute;    width: 672px;    height: 934px;    left: 38px;    top: 35px;    background: #FFFFFF;    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);    border-radius: 44px;} .resaults{    /*position: absolute;    top: 150px;*/    width: 300px;     background-color: white;    font-style: normal;    font-weight: 500;    padding-left: 12px;    font-size: 20px;    line-height: 33px;}.submitbtn{    box-sizing: border-box;    position: absolute;    width: 230px;    height: 60px;    left: 350px;    border: 3px solid #DADADA;    border-radius: 9px;    font-weight: 500;    font-size: 28px;    line-height: 33px;    background: white;    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;    font-style: normal;}.nomore{    position: absolute;    width: 430px;    top: 90px;    left: 350px;    font-weight: 500;    font-size: 18px;    line-height: 33px;    color: red;    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;    font-style: normal;}.curres{    position: absolute;    width: 430px;    top: 90px;    left: 350px;    font-weight: 500;    font-size: 18px;    line-height: 33px;    color: #00cc0a;    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;    font-style: normal;    }.stats{    font-weight: 500;    font-size: 28px;    line-height: 33px;    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;    font-style: normal;  } .questions{    font-style: normal;    font-weight: 550;    font-size: 28px;    line-height: 28px;}.question{    background: white;    width: 315px;    font-style: normal;    font-weight: 550;    font-size: 20px;    line-height: 28px;}.namee {position: absolute;width: 700px;height: 38px;left: 0px;top: 0px;font-style: normal;font-weight: 500;font-size: 26px;line-height: 33px;}.picture{position: absolute;width: 288px;height: 38px;right: 0px;top: 0px;}.trys-left{position: absolute;width: 996px;height: 38px;left: 350px;top: -5px;font-style: normal;font-weight: 500;font-size: 20px;line-height: 33px;}\n";
    ll q = 0, num = 1;
    for(ll i = firstx; i <= lastx; i++) {
        for(ll j = firsty; j <= lasty; j++) {
            q++;
            if(board_ans[i][j] != '.') {
                file4 << ".field" << q << "{background: #ffffff;width: 40px;height: 40px;font-size: 20px;text-align:center;border: 2px solid #DADADA;position: absolute;left: " << 750 + (j - firsty) * 48 << "px;top: " << 80 + (i - firstx) * 46 << "px;}\n";
            }

            if(board_ans[i][j] != '.' && board_ans[i][j - 1] == '.' && board_ans[i][j + 1] != '.' ) {
                file4 << ".num" << num << "{position: absolute;font-size: 12px;left: " << 752 + (j - firsty) * 48 << "px;top: " << 96 + (i - firstx) * 46 << "px;z-index: 10;}\n";
                num++;
            }
            if(board_ans[i][j] != '.' && board_ans[i - 1][j] == '.' && board_ans[i + 1][j] != '.' ) {
                file4 << ".num" << num << "{position: absolute;font-size: 12px;left: " << 771 + (j - firsty) * 48 << "px;top: " << 80 + (i - firstx) * 46 << "px;z-index: 10;}\n";
                num++;
            }
        }
    }
    file4.close();
}
int main()
{
    //SetConsoleCP(866);
    //SetConsoleOutputCP(866);

    //setlocale(LC_ALL, "ru_RU.UTF-8");
    setlocale(LC_ALL, "russian");
    input();
    generatee();
    grid_keys();
    grid();
    style();



    //for(auto i : listt) cout << i << '\n';
}
