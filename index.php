<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MySQL String Functions Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="card shadow mt-5">
    <div class="card-header bg-dark text-white">
        <h3 class="mb-0">MySQL Numeric Functions Demonstration</h3>
    </div>

        <div class="card-body table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-secondary">
                    <tr>
                        <th>SQL Function</th>
                        <th>Description</th>
                        <th>Example Code</th>
                        <th>Example Output</th>
                    </tr>
                </thead>
                <tbody>

                <tr>
                    <td>ASCII()</td>
                    <td>Returns ASCII value of first character in title</td>
                    <td><code>SELECT ASCII(title) FROM movies;</code></td>
                    <td><a href="functions/string_functions/ascii.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>CHAR_LENGTH()</td>
                    <td>Length of title in characters</td>
                    <td><code>SELECT CHAR_LENGTH(title) FROM movies;</code></td>
                    <td><a href="functions/string_functions/char_length.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>CHARACTER_LENGTH()</td>
                    <td>Length of title in characters</td>
                    <td><code>SELECT CHARACTER_LENGTH(title) FROM movies;</code></td>
                    <td><a href="functions/string_functions/character_length.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>CONCAT()</td>
                    <td>Combine title and director</td>
                    <td><code>SELECT CONCAT(title,' - ',director) FROM movies;</code></td>
                    <td><a href="functions/string_functions/concat.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>CONCAT_WS()</td>
                    <td>Combine title and director with separator</td>
                    <td><code>SELECT CONCAT_WS(' | ', title, director) FROM movies;</code></td>
                    <td><a href="functions/string_functions/concat_ws.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>LEFT()</td>
                    <td>First 5 characters of title</td>
                    <td><code>SELECT LEFT(title,5) FROM movies;</code></td>
                    <td><a href="functions/string_functions/left.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>RIGHT()</td>
                    <td>Last 5 characters of title</td>
                    <td><code>SELECT RIGHT(title,5) FROM movies;</code></td>
                    <td><a href="functions/string_functions/right.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>LENGTH()</td>
                    <td>Length of title in bytes</td>
                    <td><code>SELECT LENGTH(title) FROM movies;</code></td>
                    <td><a href="functions/string_functions/length.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>LOWER()</td>
                    <td>Convert title to lowercase</td>
                    <td><code>SELECT LOWER(title) FROM movies;</code></td>
                    <td><a href="functions/string_functions/lower.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>UPPER()</td>
                    <td>Convert title to uppercase</td>
                    <td><code>SELECT UPPER(title) FROM movies;</code></td>
                    <td><a href="functions/string_functions/upper.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>REPLACE()</td>
                    <td>Replace spaces in title with dash</td>
                    <td><code>SELECT REPLACE(title,' ','-') FROM movies;</code></td>
                    <td><a href="functions/string_functions/replace.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>REVERSE()</td>
                    <td>Reverse the movie title</td>
                    <td><code>SELECT REVERSE(title) FROM movies;</code></td>
                    <td><a href="functions/string_functions/reverse.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>TRIM()</td>
                    <td>Remove spaces around title</td>
                    <td><code>SELECT TRIM(title) FROM movies;</code></td>
                    <td><a href="functions/string_functions/trim.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>SUBSTRING()</td>
                    <td>Extract part of title</td>
                    <td><code>SELECT SUBSTRING(title,1,6) FROM movies;</code></td>
                    <td><a href="functions/string_functions/substring.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>INSTR()</td>
                    <td>Find position of letter 'e' in title</td>
                    <td><code>SELECT INSTR(title,'e') FROM movies;</code></td>
                    <td><a href="functions/string_functions/instr.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                </tbody>
        </table>
    </div>
</div>

<div class="card shadow mt-5">
    <div class="card-header bg-success text-white">
        <h3 class="mb-0">MySQL Numeric Functions Demonstration</h3>
    </div>

    <div class="card-body table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-secondary">
                <tr>
                    <th>SQL Function</th>
                    <th>Description</th>
                    <th>Example Code</th>
                    <th>Example Output</th>
                </tr>
            </thead>
            <tbody>

            <tr>
                <td>ABS()</td>
                <td>Absolute value of rating score</td>
                <td><code>SELECT ABS(rating_score) FROM movies;</code></td>
                <td><a href="functions/numeric_functions/abs.php" target="_blank" class="btn btn-sm btn-success">View Output</a></td>
            </tr>

            <tr>
                <td>AVG()</td>
                <td>Average movie price</td>
                <td><code>SELECT AVG(price) FROM movies;</code></td>
                <td><a href="functions/numeric_functions/avg.php" target="_blank" class="btn btn-sm btn-success">View Output</a></td>
            </tr>

            <tr>
                <td>CEIL()</td>
                <td>Round price up</td>
                <td><code>SELECT CEIL(price) FROM movies;</code></td>
                <td><a href="functions/numeric_functions/ceil.php" target="_blank" class="btn btn-sm btn-success">View Output</a></td>
            </tr>

            <tr>
                <td>CEILING()</td>
                <td>Round price up</td>
                <td><code>SELECT CEILING(price) FROM movies;</code></td>
                <td><a href="functions/numeric_functions/ceiling.php" target="_blank" class="btn btn-sm btn-success">View Output</a></td>
            </tr>

            <tr>
                <td>COUNT()</td>
                <td>Count total movies</td>
                <td><code>SELECT COUNT(price) FROM movies;</code></td>
                <td><a href="functions/numeric_functions/count.php" target="_blank" class="btn btn-sm btn-success">View Output</a></td>
            </tr>

            <tr>
                <td>FLOOR()</td>
                <td>Round price down</td>
                <td><code>SELECT FLOOR(price) FROM movies;</code></td>
                <td><a href="functions/numeric_functions/floor.php" target="_blank" class="btn btn-sm btn-success">View Output</a></td>
            </tr>

            <tr>
                <td>GREATEST()</td>
                <td>Greater value between price and rating</td>
                <td><code>SELECT GREATEST(price, rating_score) FROM movies;</code></td>
                <td><a href="functions/numeric_functions/greatest.php" target="_blank" class="btn btn-sm btn-success">View Output</a></td>
            </tr>

            <tr>
                <td>LEAST()</td>
                <td>Smaller value between price and rating</td>
                <td><code>SELECT LEAST(price, rating_score) FROM movies;</code></td>
                <td><a href="functions/numeric_functions/least.php" target="_blank" class="btn btn-sm btn-success">View Output</a></td>
            </tr>

            <tr>
                <td>MAX()</td>
                <td>Highest movie price</td>
                <td><code>SELECT MAX(price) FROM movies;</code></td>
                <td><a href="functions/numeric_functions/max.php" target="_blank" class="btn btn-sm btn-success">View Output</a></td>
            </tr>

            <tr>
                <td>MIN()</td>
                <td>Lowest movie price</td>
                <td><code>SELECT MIN(price) FROM movies;</code></td>
                <td><a href="functions/numeric_functions/min.php" target="_blank" class="btn btn-sm btn-success">View Output</a></td>
            </tr>

            <tr>
                <td>MOD()</td>
                <td>Remainder of duration divided by 60</td>
                <td><code>SELECT MOD(duration_minutes,60) FROM movies;</code></td>
                <td><a href="functions/numeric_functions/mod.php" target="_blank" class="btn btn-sm btn-success">View Output</a></td>
            </tr>

            <tr>
                <td>POW()</td>
                <td>Rating score squared</td>
                <td><code>SELECT POW(rating_score,2) FROM movies;</code></td>
                <td><a href="functions/numeric_functions/pow.php" target="_blank" class="btn btn-sm btn-success">View Output</a></td>
            </tr>

            <tr>
                <td>POWER()</td>
                <td>Rating score squared</td>
                <td><code>SELECT POWER(rating_score,2) FROM movies;</code></td>
                <td><a href="functions/numeric_functions/power.php" target="_blank" class="btn btn-sm btn-success">View Output</a></td>
            </tr>

            <tr>
                <td>RAND()</td>
                <td>Generate random number</td>
                <td><code>SELECT RAND() FROM movies;</code></td>
                <td><a href="functions/numeric_functions/rand.php" target="_blank" class="btn btn-sm btn-success">View Output</a></td>
            </tr>

            <tr>
                <td>ROUND()</td>
                <td>Round price to 2 decimals</td>
                <td><code>SELECT ROUND(price,2) FROM movies;</code></td>
                <td><a href="functions/numeric_functions/round.php" target="_blank" class="btn btn-sm btn-success">View Output</a></td>
            </tr>

            <tr>
                <td>SIGN()</td>
                <td>Show sign of rating score</td>
                <td><code>SELECT SIGN(rating_score) FROM movies;</code></td>
                <td><a href="functions/numeric_functions/sign.php" target="_blank" class="btn btn-sm btn-success">View Output</a></td>
            </tr>

            <tr>
                <td>SQRT()</td>
                <td>Square root of duration</td>
                <td><code>SELECT SQRT(duration_minutes) FROM movies;</code></td>
                <td><a href="functions/numeric_functions/sqrt.php" target="_blank" class="btn btn-sm btn-success">View Output</a></td>
            </tr>

            <tr>
                <td>SUM()</td>
                <td>Total of movie prices</td>
                <td><code>SELECT SUM(price) FROM movies;</code></td>
                <td><a href="functions/numeric_functions/sum.php" target="_blank" class="btn btn-sm btn-success">View Output</a></td>
            </tr>

            <tr>
                <td>TRUNCATE()</td>
                <td>Cut price to 1 decimal place</td>
                <td><code>SELECT TRUNCATE(price,1) FROM movies;</code></td>
                <td><a href="functions/numeric_functions/truncate.php" target="_blank" class="btn btn-sm btn-success">View Output</a></td>
            </tr>

            <tr>
                <td>DIV</td>
                <td>Convert duration to hours (integer division)</td>
                <td><code>SELECT duration_minutes DIV 60 FROM movies;</code></td>
                <td><a href="functions/numeric_functions/div.php" target="_blank" class="btn btn-sm btn-success">View Output</a></td>
            </tr>

            </tbody>
        </table>
    </div>
</div>

<!-- DATE FUNCTIONS -->
<div class="card mt-5 shadow">
    <div class="card-header bg-dark text-white">
        <h3 class="mb-0">MySQL Date Functions Demonstration</h3>
    </div>

    <div class="card-body table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-secondary">
                <tr>
                    <th>SQL Function</th>
                    <th>Description</th>
                    <th>Example Code</th>
                    <th>Example Output</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>ADDDATE()</td>
                    <td>Adds 10 days to added_date</td>
                    <td><code>SELECT ADDDATE(added_date, INTERVAL 10 DAY) FROM movies;</code></td>
                    <td><a href="functions/date_functions/adddate.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>ADDTIME()</td>
                    <td>Adds 1 hour 30 minutes to a time</td>
                    <td><code>SELECT ADDTIME('12:00:00','01:30:00');</code></td>
                    <td><a href="functions/date_functions/addtime.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>CURDATE()</td>
                    <td>Returns the current date</td>
                    <td><code>SELECT CURDATE();</code></td>
                    <td><a href="functions/date_functions/curdate.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>CURRENT_DATE()</td>
                    <td>Returns the current date</td>
                    <td><code>SELECT CURRENT_DATE();</code></td>
                    <td><a href="functions/date_functions/current_date.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>CURRENT_TIME()</td>
                    <td>Returns the current time</td>
                    <td><code>SELECT CURRENT_TIME();</code></td>
                    <td><a href="functions/date_functions/current_time.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>CURRENT_TIMESTAMP()</td>
                    <td>Returns the current date and time</td>
                    <td><code>SELECT CURRENT_TIMESTAMP();</code></td>
                    <td><a href="functions/date_functions/current_timestamp.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>CURTIME()</td>
                    <td>Returns the current time</td>
                    <td><code>SELECT CURTIME();</code></td>
                    <td><a href="functions/date_functions/curtime.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>DATE()</td>
                    <td>Extracts the date part from added_date</td>
                    <td><code>SELECT DATE(added_date) FROM movies;</code></td>
                    <td><a href="functions/date_functions/date.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>DATEDIFF()</td>
                    <td>Number of days between today and added_date</td>
                    <td><code>SELECT DATEDIFF(CURDATE(), added_date) FROM movies;</code></td>
                    <td><a href="functions/date_functions/datediff.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>DATE_ADD()</td>
                    <td>Adds 2 months to added_date</td>
                    <td><code>SELECT DATE_ADD(added_date, INTERVAL 2 MONTH) FROM movies;</code></td>
                    <td><a href="functions/date_functions/date_add.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>DATE_FORMAT()</td>
                    <td>Formats added_date as 'Month Day, Year'</td>
                    <td><code>SELECT DATE_FORMAT(added_date,'%M %d, %Y') FROM movies;</code></td>
                    <td><a href="functions/date_functions/date_format.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>DATE_SUB()</td>
                    <td>Subtracts 1 month from added_date</td>
                    <td><code>SELECT DATE_SUB(added_date, INTERVAL 1 MONTH) FROM movies;</code></td>
                    <td><a href="functions/date_functions/date_sub.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>DAY()</td>
                    <td>Day of the month of added_date</td>
                    <td><code>SELECT DAY(added_date) FROM movies;</code></td>
                    <td><a href="functions/date_functions/day.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>DAYNAME()</td>
                    <td>Weekday name of added_date</td>
                    <td><code>SELECT DAYNAME(added_date) FROM movies;</code></td>
                    <td><a href="functions/date_functions/dayname.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>DAYOFMONTH()</td>
                    <td>Day of the month of added_date</td>
                    <td><code>SELECT DAYOFMONTH(added_date) FROM movies;</code></td>
                    <td><a href="functions/date_functions/dayofmonth.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>DAYOFWEEK()</td>
                    <td>Day index of the week of added_date</td>
                    <td><code>SELECT DAYOFWEEK(added_date) FROM movies;</code></td>
                    <td><a href="functions/date_functions/dayofweek.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>DAYOFYEAR()</td>
                    <td>Day of the year of added_date</td>
                    <td><code>SELECT DAYOFYEAR(added_date) FROM movies;</code></td>
                    <td><a href="functions/date_functions/dayofyear.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>EXTRACT()</td>
                    <td>Extracts year from added_date</td>
                    <td><code>SELECT EXTRACT(YEAR FROM added_date) FROM movies;</code></td>
                    <td><a href="functions/date_functions/extract.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>FROM_DAYS()</td>
                    <td>Returns date from numeric value 738000</td>
                    <td><code>SELECT FROM_DAYS(738000);</code></td>
                    <td><a href="functions/date_functions/from_days.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>LAST_DAY()</td>
                    <td>Last day of the month of added_date</td>
                    <td><code>SELECT LAST_DAY(added_date) FROM movies;</code></td>
                    <td><a href="functions/date_functions/last_day.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>LOCALTIME()</td>
                    <td>Current date and time</td>
                    <td><code>SELECT LOCALTIME();</code></td>
                    <td><a href="functions/date_functions/localtime.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>LOCALTIMESTAMP()</td>
                    <td>Current date and time</td>
                    <td><code>SELECT LOCALTIMESTAMP();</code></td>
                    <td><a href="functions/date_functions/localtimestamp.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>MAKEDATE()</td>
                    <td>Creates date from year 2026 and day 45</td>
                    <td><code>SELECT MAKEDATE(2026,45);</code></td>
                    <td><a href="functions/date_functions/makedate.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>MAKETIME()</td>
                    <td>Creates time 14:30:15</td>
                    <td><code>SELECT MAKETIME(14,30,15);</code></td>
                    <td><a href="functions/date_functions/maketime.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>MICROSECOND()</td>
                    <td>Microseconds of '12:15:30.123456'</td>
                    <td><code>SELECT MICROSECOND('12:15:30.123456');</code></td>
                    <td><a href="functions/date_functions/microsecond.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>MINUTE()</td>
                    <td>Minute part of CURTIME()</td>
                    <td><code>SELECT MINUTE(CURTIME());</code></td>
                    <td><a href="functions/date_functions/minute.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>MONTH()</td>
                    <td>Month of added_date</td>
                    <td><code>SELECT MONTH(added_date) FROM movies;</code></td>
                    <td><a href="functions/date_functions/month.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>MONTHNAME()</td>
                    <td>Name of the month of added_date</td>
                    <td><code>SELECT MONTHNAME(added_date) FROM movies;</code></td>
                    <td><a href="functions/date_functions/monthname.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>NOW()</td>
                    <td>Current date and time</td>
                    <td><code>SELECT NOW();</code></td>
                    <td><a href="functions/date_functions/now.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>PERIOD_ADD()</td>
                    <td>Adds 2 months to period 202301</td>
                    <td><code>SELECT PERIOD_ADD(202301,2);</code></td>
                    <td><a href="functions/date_functions/period_add.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>PERIOD_DIFF()</td>
                    <td>Difference between period 202306 and 202301</td>
                    <td><code>SELECT PERIOD_DIFF(202306,202301);</code></td>
                    <td><a href="functions/date_functions/period_diff.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>QUARTER()</td>
                    <td>Quarter of added_date</td>
                    <td><code>SELECT QUARTER(added_date) FROM movies;</code></td>
                    <td><a href="functions/date_functions/quarter.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>SECOND()</td>
                    <td>Seconds of CURTIME()</td>
                    <td><code>SELECT SECOND(CURTIME());</code></td>
                    <td><a href="functions/date_functions/second.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>SEC_TO_TIME()</td>
                    <td>Convert 3670 seconds to time</td>
                    <td><code>SELECT SEC_TO_TIME(3670);</code></td>
                    <td><a href="functions/date_functions/sec_to_time.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>STR_TO_DATE()</td>
                    <td>Convert string '2026-02-06' to date</td>
                    <td><code>SELECT STR_TO_DATE('2026-02-06','%Y-%m-%d');</code></td>
                    <td><a href="functions/date_functions/str_to_date.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>SUBDATE()</td>
                    <td>Subtract 5 days from added_date</td>
                    <td><code>SELECT SUBDATE(added_date, INTERVAL 5 DAY) FROM movies;</code></td>
                    <td><a href="functions/date_functions/subdate.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>SUBTIME()</td>
                    <td>Subtract 1 hour 15 minutes from '12:30:00'</td>
                    <td><code>SELECT SUBTIME('12:30:00','01:15:00');</code></td>
                    <td><a href="functions/date_functions/subtime.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>SYSDATE()</td>
                    <td>Current date and time</td>
                    <td><code>SELECT SYSDATE();</code></td>
                    <td><a href="functions/date_functions/sysdate.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>TIME()</td>
                    <td>Extract time part of '2026-02-06 14:30:15'</td>
                    <td><code>SELECT TIME('2026-02-06 14:30:15');</code></td>
                    <td><a href="functions/date_functions/time.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>TIME_FORMAT()</td>
                    <td>Formats time '14:30:15' as '%h:%i %p'</td>
                    <td><code>SELECT TIME_FORMAT('14:30:15','%h:%i %p');</code></td>
                    <td><a href="functions/date_functions/time_format.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>TIME_TO_SEC()</td>
                    <td>Convert '01:01:10' to seconds</td>
                    <td><code>SELECT TIME_TO_SEC('01:01:10');</code></td>
                    <td><a href="functions/date_functions/time_to_sec.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>TIMEDIFF()</td>
                    <td>Difference between '12:30:00' and '10:15:00'</td>
                    <td><code>SELECT TIMEDIFF('12:30:00','10:15:00');</code></td>
                    <td><a href="functions/date_functions/timediff.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>TIMESTAMP()</td>
                    <td>Returns datetime from date '2026-02-06'</td>
                    <td><code>SELECT TIMESTAMP('2026-02-06');</code></td>
                    <td><a href="functions/date_functions/timestamp.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>TO_DAYS()</td>
                    <td>Days from 0000-00-00 to added_date</td>
                    <td><code>SELECT TO_DAYS(added_date) FROM movies;</code></td>
                    <td><a href="functions/date_functions/to_days.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>WEEK()</td>
                    <td>Week number of added_date</td>
                    <td><code>SELECT WEEK(added_date) FROM movies;</code></td>
                    <td><a href="functions/date_functions/week.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>WEEKDAY()</td>
                    <td>Weekday number of added_date</td>
                    <td><code>SELECT WEEKDAY(added_date) FROM movies;</code></td>
                    <td><a href="functions/date_functions/weekday.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>WEEKOFYEAR()</td>
                    <td>Week number of added_date</td>
                    <td><code>SELECT WEEKOFYEAR(added_date) FROM movies;</code></td>
                    <td><a href="functions/date_functions/weekofyear.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>YEAR()</td>
                    <td>Year of added_date</td>
                    <td><code>SELECT YEAR(added_date) FROM movies;</code></td>
                    <td><a href="functions/date_functions/year.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>YEARWEEK()</td>
                    <td>Year and week number of added_date</td>
                    <td><code>SELECT YEARWEEK(added_date) FROM movies;</code></td>
                    <td><a href="functions/date_functions/yearweek.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

            </tbody>
        </table>
    </div>
</div>

<div class="card shadow mt-5">
    <div class="card-header bg-dark text-white">
        <h3 class="mb-0">MySQL Advanced Functions Demonstration</h3>
    </div>

    <div class="card-body table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-secondary">
                <tr>
                    <th>SQL Function</th>
                    <th>Description</th>
                    <th>Example Code</th>
                    <th>Example Output</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>BIN()</td>
                    <td>Binary representation of rating</td>
                    <td><code>SELECT BIN(rating) FROM movies;</code></td>
                    <td><a href="functions/advanced_functions/bin.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>BINARY</td>
                    <td>Convert title to binary string</td>
                    <td><code>SELECT BINARY title FROM movies;</code></td>
                    <td><a href="functions/advanced_functions/binary.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>CASE</td>
                    <td>Categorize rating as High or Low</td>
                    <td><code>SELECT CASE WHEN rating &gt;= 8 THEN 'High' ELSE 'Low' END FROM movies;</code></td>
                    <td><a href="functions/advanced_functions/case.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>CAST()</td>
                    <td>Convert rating to integer</td>
                    <td><code>SELECT CAST(rating AS SIGNED) FROM movies;</code></td>
                    <td><a href="functions/advanced_functions/cast.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>COALESCE()</td>
                    <td>Return first non-null value</td>
                    <td><code>SELECT COALESCE(NULL, title) FROM movies;</code></td>
                    <td><a href="functions/advanced_functions/coalesce.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>CONNECTION_ID()</td>
                    <td>Current connection ID</td>
                    <td><code>SELECT CONNECTION_ID();</code></td>
                    <td><a href="functions/advanced_functions/connection_id.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>CONV()</td>
                    <td>Convert number from base 10 to base 2</td>
                    <td><code>SELECT CONV(10,10,2);</code></td>
                    <td><a href="functions/advanced_functions/conv.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>CONVERT()</td>
                    <td>Convert title to CHAR</td>
                    <td><code>SELECT CONVERT(title, CHAR) FROM movies;</code></td>
                    <td><a href="functions/advanced_functions/convert.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>CURRENT_USER()</td>
                    <td>Current MySQL user</td>
                    <td><code>SELECT CURRENT_USER();</code></td>
                    <td><a href="functions/advanced_functions/current_user.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>DATABASE()</td>
                    <td>Name of current database</td>
                    <td><code>SELECT DATABASE();</code></td>
                    <td><a href="functions/advanced_functions/database.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>IFNULL()</td>
                    <td>Return title if not null</td>
                    <td><code>SELECT IFNULL(title,'N/A') FROM movies;</code></td>
                    <td><a href="functions/advanced_functions/ifnull.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>ISNULL()</td>
                    <td>Check if title is null</td>
                    <td><code>SELECT ISNULL(title) FROM movies;</code></td>
                    <td><a href="functions/advanced_functions/isnull.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>LAST_INSERT_ID()</td>
                    <td>Last inserted ID</td>
                    <td><code>SELECT LAST_INSERT_ID();</code></td>
                    <td><a href="functions/advanced_functions/last_insert_id.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>NULLIF()</td>
                    <td>Returns NULL if rating equals 8</td>
                    <td><code>SELECT NULLIF(rating,8) FROM movies;</code></td>
                    <td><a href="functions/advanced_functions/nullif.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>SESSION_USER()</td>
                    <td>Session user</td>
                    <td><code>SELECT SESSION_USER();</code></td>
                    <td><a href="functions/advanced_functions/session_user.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>SYSTEM_USER()</td>
                    <td>System user</td>
                    <td><code>SELECT SYSTEM_USER();</code></td>
                    <td><a href="functions/advanced_functions/system_user.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>USER()</td>
                    <td>User and host name</td>
                    <td><code>SELECT USER();</code></td>
                    <td><a href="functions/advanced_functions/user.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

                <tr>
                    <td>VERSION()</td>
                    <td>MySQL version</td>
                    <td><code>SELECT VERSION();</code></td>
                    <td><a href="functions/advanced_functions/version.php" target="_blank" class="btn btn-sm btn-primary">View Output</a></td>
                </tr>

            </tbody>
        </table>
    </div>
</div>

</body>
</html>
