@extends('layouts.app');

@section('content')
  新規登録画面
  <form action="{{ route('users.store') }}" method="POST">
    @csrf
    <input name="name" type="text" placeholder="テスト太郎" value="{{ old('name') }}">
    @error('name')
      <p>{{ $message }}</p>
    @enderror
    <select name="sex" id="">
      <option value="選択してください">選択してください</option>
      <option value="0">男</option>
      <option value="1">女</option>
      <option value="2">その他</option>
    </select>
    @error('sex')
      <p>{{ $message }}</p>
    @enderror
    <select name="year">
      <option value="">年を選択してください</option>
      <option value="1900" @if(1900 === (int)old('year')) selected @endif>1900</option>
      <option value="1901" @if(1901 === (int)old('year')) selected @endif>1901</option>
      <option value="1902" @if(1902 === (int)old('year')) selected @endif>1902</option>
      <option value="1903" @if(1903 === (int)old('year')) selected @endif>1903</option>
      <option value="1904" @if(1904 === (int)old('year')) selected @endif>1904</option>
      <option value="1905" @if(1905 === (int)old('year')) selected @endif>1905</option>
      <option value="1906" @if(1906 === (int)old('year')) selected @endif>1906</option>
      <option value="1907" @if(1907 === (int)old('year')) selected @endif>1907</option>
      <option value="1908" @if(1908 === (int)old('year')) selected @endif>1908</option>
      <option value="1909" @if(1909 === (int)old('year')) selected @endif>1909</option>
      <option value="1910" @if(1910 === (int)old('year')) selected @endif>1910</option>
      <option value="1911" @if(1911 === (int)old('year')) selected @endif>1911</option>
      <option value="1912" @if(1912 === (int)old('year')) selected @endif>1912</option>
      <option value="1913" @if(1913 === (int)old('year')) selected @endif>1913</option>
      <option value="1914" @if(1914 === (int)old('year')) selected @endif>1914</option>
      <option value="1915" @if(1915 === (int)old('year')) selected @endif>1915</option>
      <option value="1916" @if(1916 === (int)old('year')) selected @endif>1916</option>
      <option value="1917" @if(1917 === (int)old('year')) selected @endif>1917</option>
      <option value="1918" @if(1918 === (int)old('year')) selected @endif>1918</option>
      <option value="1919" @if(1919 === (int)old('year')) selected @endif>1919</option>
      <option value="1920" @if(1920 === (int)old('year')) selected @endif>1920</option>
      <option value="1921" @if(1921 === (int)old('year')) selected @endif>1921</option>
      <option value="1922" @if(1922 === (int)old('year')) selected @endif>1922</option>
      <option value="1923" @if(1923 === (int)old('year')) selected @endif>1923</option>
      <option value="1924" @if(1924 === (int)old('year')) selected @endif>1924</option>
      <option value="1925" @if(1925 === (int)old('year')) selected @endif>1925</option>
      <option value="1926" @if(1926 === (int)old('year')) selected @endif>1926</option>
      <option value="1927" @if(1927 === (int)old('year')) selected @endif>1927</option>
      <option value="1928" @if(1928 === (int)old('year')) selected @endif>1928</option>
      <option value="1929" @if(1929 === (int)old('year')) selected @endif>1929</option>
      <option value="1930" @if(1930 === (int)old('year')) selected @endif>1930</option>
      <option value="1931" @if(1931 === (int)old('year')) selected @endif>1931</option>
      <option value="1932" @if(1932 === (int)old('year')) selected @endif>1932</option>
      <option value="1933" @if(1933 === (int)old('year')) selected @endif>1933</option>
      <option value="1934" @if(1934 === (int)old('year')) selected @endif>1934</option>
      <option value="1935" @if(1935 === (int)old('year')) selected @endif>1935</option>
      <option value="1936" @if(1936 === (int)old('year')) selected @endif>1936</option>
      <option value="1937" @if(1937 === (int)old('year')) selected @endif>1937</option>
      <option value="1938" @if(1938 === (int)old('year')) selected @endif>1938</option>
      <option value="1939" @if(1939 === (int)old('year')) selected @endif>1939</option>
      <option value="1940" @if(1940 === (int)old('year')) selected @endif>1940</option>
      <option value="1941" @if(1941 === (int)old('year')) selected @endif>1941</option>
      <option value="1942" @if(1942 === (int)old('year')) selected @endif>1942</option>
      <option value="1943" @if(1943 === (int)old('year')) selected @endif>1943</option>
      <option value="1944" @if(1944 === (int)old('year')) selected @endif>1944</option>
      <option value="1945" @if(1945 === (int)old('year')) selected @endif>1945</option>
      <option value="1946" @if(1946 === (int)old('year')) selected @endif>1946</option>
      <option value="1947" @if(1947 === (int)old('year')) selected @endif>1947</option>
      <option value="1948" @if(1948 === (int)old('year')) selected @endif>1948</option>
      <option value="1949" @if(1949 === (int)old('year')) selected @endif>1949</option>
      <option value="1950" @if(1950 === (int)old('year')) selected @endif>1950</option>
      <option value="1951" @if(1951 === (int)old('year')) selected @endif>1951</option>
      <option value="1952" @if(1952 === (int)old('year')) selected @endif>1952</option>
      <option value="1953" @if(1953 === (int)old('year')) selected @endif>1953</option>
      <option value="1954" @if(1954 === (int)old('year')) selected @endif>1954</option>
      <option value="1955" @if(1955 === (int)old('year')) selected @endif>1955</option>
      <option value="1956" @if(1956 === (int)old('year')) selected @endif>1956</option>
      <option value="1957" @if(1957 === (int)old('year')) selected @endif>1957</option>
      <option value="1958" @if(1958 === (int)old('year')) selected @endif>1958</option>
      <option value="1959" @if(1959 === (int)old('year')) selected @endif>1959</option>
      <option value="1960" @if(1960 === (int)old('year')) selected @endif>1960</option>
      <option value="1961" @if(1961 === (int)old('year')) selected @endif>1961</option>
      <option value="1962" @if(1962 === (int)old('year')) selected @endif>1962</option>
      <option value="1963" @if(1963 === (int)old('year')) selected @endif>1963</option>
      <option value="1964" @if(1964 === (int)old('year')) selected @endif>1964</option>
      <option value="1965" @if(1965 === (int)old('year')) selected @endif>1965</option>
      <option value="1966" @if(1966 === (int)old('year')) selected @endif>1966</option>
      <option value="1967" @if(1967 === (int)old('year')) selected @endif>1967</option>
      <option value="1968" @if(1968 === (int)old('year')) selected @endif>1968</option>
      <option value="1969" @if(1969 === (int)old('year')) selected @endif>1969</option>
      <option value="1970" @if(1970 === (int)old('year')) selected @endif>1970</option>
      <option value="1971" @if(1971 === (int)old('year')) selected @endif>1971</option>
      <option value="1972" @if(1972 === (int)old('year')) selected @endif>1972</option>
      <option value="1973" @if(1973 === (int)old('year')) selected @endif>1973</option>
      <option value="1974" @if(1974 === (int)old('year')) selected @endif>1974</option>
      <option value="1975" @if(1975 === (int)old('year')) selected @endif>1975</option>
      <option value="1976" @if(1976 === (int)old('year')) selected @endif>1976</option>
      <option value="1977" @if(1977 === (int)old('year')) selected @endif>1977</option>
      <option value="1978" @if(1978 === (int)old('year')) selected @endif>1978</option>
      <option value="1979" @if(1979 === (int)old('year')) selected @endif>1979</option>
      <option value="1980" @if(1980 === (int)old('year')) selected @endif>1980</option>
      <option value="1981" @if(1981 === (int)old('year')) selected @endif>1981</option>
      <option value="1982" @if(1982 === (int)old('year')) selected @endif>1982</option>
      <option value="1983" @if(1983 === (int)old('year')) selected @endif>1983</option>
      <option value="1984" @if(1984 === (int)old('year')) selected @endif>1984</option>
      <option value="1985" @if(1985 === (int)old('year')) selected @endif>1985</option>
      <option value="1986" @if(1986 === (int)old('year')) selected @endif>1986</option>
      <option value="1987" @if(1987 === (int)old('year')) selected @endif>1987</option>
      <option value="1988" @if(1988 === (int)old('year')) selected @endif>1988</option>
      <option value="1989" @if(1989 === (int)old('year')) selected @endif>1989</option>
      <option value="1990" @if(1990 === (int)old('year')) selected @endif>1990</option>
      <option value="1991" @if(1991 === (int)old('year')) selected @endif>1991</option>
      <option value="1992" @if(1992 === (int)old('year')) selected @endif>1992</option>
      <option value="1993" @if(1993 === (int)old('year')) selected @endif>1993</option>
      <option value="1994" @if(1994 === (int)old('year')) selected @endif>1994</option>
      <option value="1995" @if(1995 === (int)old('year')) selected @endif>1995</option>
      <option value="1996" @if(1996 === (int)old('year')) selected @endif>1996</option>
      <option value="1997" @if(1997 === (int)old('year')) selected @endif>1997</option>
      <option value="1998" @if(1998 === (int)old('year')) selected @endif>1998</option>
      <option value="1999" @if(1999 === (int)old('year')) selected @endif>1999</option>
      <option value="2000" @if(2000 === (int)old('year')) selected @endif>2000</option>
      <option value="2001" @if(2001 === (int)old('year')) selected @endif>2001</option>
      <option value="2002" @if(2002 === (int)old('year')) selected @endif>2002</option>
      <option value="2003" @if(2003 === (int)old('year')) selected @endif>2003</option>
      <option value="2004" @if(2004 === (int)old('year')) selected @endif>2004</option>
      <option value="2005" @if(2005 === (int)old('year')) selected @endif>2005</option>
      <option value="2006" @if(2006 === (int)old('year')) selected @endif>2006</option>
      <option value="2007" @if(2007 === (int)old('year')) selected @endif>2007</option>
      <option value="2008" @if(2008 === (int)old('year')) selected @endif>2008</option>
      <option value="2009" @if(2009 === (int)old('year')) selected @endif>2009</option>
      <option value="2010" @if(2010 === (int)old('year')) selected @endif>2010</option>
      <option value="2011" @if(2011 === (int)old('year')) selected @endif>2011</option>
      <option value="2012" @if(2012 === (int)old('year')) selected @endif>2012</option>
      <option value="2013" @if(2013 === (int)old('year')) selected @endif>2013</option>
      <option value="2014" @if(2014 === (int)old('year')) selected @endif>2014</option>
      <option value="2015" @if(2015 === (int)old('year')) selected @endif>2015</option>
      <option value="2016" @if(2016 === (int)old('year')) selected @endif>2016</option>
      <option value="2017" @if(2017 === (int)old('year')) selected @endif>2017</option>
      <option value="2018" @if(2018 === (int)old('year')) selected @endif>2018</option>
      <option value="2019" @if(2019 === (int)old('year')) selected @endif>2019</option>
      <option value="2020" @if(2020 === (int)old('year')) selected @endif>2020</option>
      <option value="2021" @if(2021 === (int)old('year')) selected @endif>2021</option>
      <option value="2022" @if(2022 === (int)old('year')) selected @endif>2022</option>
      <option value="2023" @if(2023 === (int)old('year')) selected @endif>2023</option>
      <option value="2024" @if(2024 === (int)old('year')) selected @endif>2024</option>
      <option value="2025" @if(2025 === (int)old('year')) selected @endif>2025</option>
      <option value="2026" @if(2026 === (int)old('year')) selected @endif>2026</option>
      <option value="2027" @if(2027 === (int)old('year')) selected @endif>2027</option>
      <option value="2028" @if(2028 === (int)old('year')) selected @endif>2028</option>
      <option value="2029" @if(2029 === (int)old('year')) selected @endif>2029</option>
      <option value="2030" @if(2030 === (int)old('year')) selected @endif>2030</option>
    </select>　年
    @error('year')
      <p>{{ $message }}</p>
    @enderror
    <select name="month">
      <option value="">月を選択してください</option>
      <option value="1" @if(1 === (int)old('month')) selected @endif>1</option>
      <option value="2" @if(2 === (int)old('month')) selected @endif>2</option>
      <option value="3" @if(3 === (int)old('month')) selected @endif>3</option>
      <option value="4" @if(4 === (int)old('month')) selected @endif>4</option>
      <option value="5" @if(5 === (int)old('month')) selected @endif>5</option>
      <option value="6" @if(6 === (int)old('month')) selected @endif>6</option>
      <option value="7" @if(7 === (int)old('month')) selected @endif>7</option>
      <option value="8" @if(8 === (int)old('month')) selected @endif>8</option>
      <option value="9" @if(9 === (int)old('month')) selected @endif>9</option>
      <option value="10" @if(10 === (int)old('month')) selected @endif>10</option>
      <option value="11" @if(11 === (int)old('month')) selected @endif>11</option>
      <option value="12" @if(12 === (int)old('month')) selected @endif>12</option>
    </select>　月
    @error('month')
      <p>{{ $message }}</p>
    @enderror
    <select name="day">
      <option value="">日を選択してください</option>
      <option value="1" @if(1 === (int)old('day')) selected @endif>1</option>
      <option value="2" @if(2 === (int)old('day')) selected @endif>2</option>
      <option value="3" @if(3 === (int)old('day')) selected @endif>3</option>
      <option value="4" @if(4 === (int)old('day')) selected @endif>4</option>
      <option value="5" @if(5 === (int)old('day')) selected @endif>5</option>
      <option value="6" @if(6 === (int)old('day')) selected @endif>6</option>
      <option value="7" @if(7 === (int)old('day')) selected @endif>7</option>
      <option value="8" @if(8 === (int)old('day')) selected @endif>8</option>
      <option value="9" @if(9 === (int)old('day')) selected @endif>9</option>
      <option value="10" @if(10 === (int)old('day')) selected @endif>10</option>
      <option value="11" @if(11 === (int)old('day')) selected @endif>11</option>
      <option value="12" @if(12 === (int)old('day')) selected @endif>12</option>
      <option value="13" @if(13 === (int)old('day')) selected @endif>13</option>
      <option value="14" @if(14 === (int)old('day')) selected @endif>14</option>
      <option value="15" @if(15 === (int)old('day')) selected @endif>15</option>
      <option value="16" @if(16 === (int)old('day')) selected @endif>16</option>
      <option value="17" @if(17 === (int)old('day')) selected @endif>17</option>
      <option value="18" @if(18 === (int)old('day')) selected @endif>18</option>
      <option value="19" @if(19 === (int)old('day')) selected @endif>19</option>
      <option value="20" @if(20 === (int)old('day')) selected @endif>20</option>
      <option value="21" @if(21 === (int)old('day')) selected @endif>21</option>
      <option value="22" @if(22 === (int)old('day')) selected @endif>22</option>
      <option value="23" @if(23 === (int)old('day')) selected @endif>23</option>
      <option value="24" @if(24 === (int)old('day')) selected @endif>24</option>
      <option value="25" @if(25 === (int)old('day')) selected @endif>25</option>
      <option value="26" @if(26 === (int)old('day')) selected @endif>26</option>
      <option value="27" @if(27 === (int)old('day')) selected @endif>27</option>
      <option value="28" @if(28 === (int)old('day')) selected @endif>28</option>
      <option value="29" @if(29 === (int)old('day')) selected @endif>29</option>
      <option value="30" @if(30 === (int)old('day')) selected @endif>30</option>
      <option value="31" @if(31 === (int)old('day')) selected @endif>31</option>
    </select>　日
    @error('day')
      <p>{{ $message }}</p>
    @enderror
    <select name="support" id="support">
      <option value="支持政党を選んでください">支持政党を選んでください</option>
      <option value="0" @if(0=== (int)old('support')) selected @endif>自由民主党</option>
      <option value="1" @if(1 === (int)old('support')) selected @endif>立憲民主党</option>
      <option value="2" @if(2 === (int)old('support')) selected @endif>日本維新の会</option>
      <option value="3" @if(3 === (int)old('support')) selected @endif>公明党</option>
      <option value="4" @if(4 === (int)old('support')) selected @endif>日本共産党</option>
      <option value="5" @if(5 === (int)old('support')) selected @endif>国民民主党</option>
      <option value="6" @if(6 === (int)old('support')) selected @endif>れいわ新撰組</option>
      <option value="7" @if(7 === (int)old('support')) selected @endif>社会民主党</option>
      <option value="8" @if(8 === (int)old('support')) selected @endif>政治家女子48党</option>
      <option value="9" @if(9 === (int)old('support')) selected @endif>参政党</option>
      <option value="10" @if(10 === (int)old('support')) selected @endif>支持する政党がない</option>
    </select>
    @error('support')
      <p>{{ $message }}</p>
    @enderror
    <input name="email" type="email" placeholder="test@test.com" value="{{ old('email') }}">
    @error('email')
      <p>{{ $message }}</p>
    @enderror
    <input name="password" type="password">
    @error('password')
      <p>{{ $message }}</p>
    @enderror
    <input name="password_confirmation" type="password">
    @error('password_confirmation')
      <p>{{ $message }}</p>
    @enderror
    <button type="submit">登録</button>
  </form>
@endsection