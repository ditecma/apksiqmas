package ils.ils.com.ilsapk;

import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.Snackbar;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.View;
import android.view.Menu;
import android.view.MenuItem;
import android.widget.ImageView;
import android.widget.TextView;

import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.InputStream;
import java.io.OutputStream;
import java.net.URI;
import java.net.URL;
import java.net.URLConnection;
import java.util.Properties;

public class MainActivity extends AppCompatActivity {
    private String urlIp = "";
    private TextView userIP;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        Toolbar toolbar = (Toolbar) findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);

        userIP = (TextView) findViewById(R.id.webIp);

        Properties props = new Properties();
        try {
            FileInputStream inputStream = new FileInputStream(
                    this.getFilesDir().getPath().toString() + "/app.properties" );
            props.load(inputStream);
        } catch (IOException e) {
            e.printStackTrace();
        }

        urlIp = props.getProperty("urlIp");

        userIP.setText(urlIp);
        saveParamChanges();
    }

    public void saveParamChanges() {
        try {
            Properties props = new Properties();
            String urlIp = "";
            if(!userIP.getText().toString().isEmpty()){
                urlIp = userIP.getText().toString();
            }else{
                urlIp = "127.0.0.1";
            }
            props.setProperty("urlIp", urlIp);
            File f = new File(this.getFilesDir().getPath().toString() + "/app.properties");
            f.setWritable(true);
            FileOutputStream out = new FileOutputStream( f );
            props.store(out, "");
            out.close();
        }
        catch (Exception e ) {
            e.printStackTrace();
        }
    }

    public void onClickLocalButton(View view) throws FileNotFoundException {

        //save properties to project root folder
        saveParamChanges();
        try{
            Uri uri = Uri.parse("http://"+userIP.getText().toString()+"/ingles-p"); // missing 'http://' will cause crashed
            Intent intent = new Intent(Intent.ACTION_VIEW, uri);
            startActivity(intent);
        }catch (Exception e){

        }
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.menu_main, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        int id = item.getItemId();

        //noinspection SimplifiableIfStatement
        if (id == R.id.action_settings) {
            return true;
        }

        return super.onOptionsItemSelected(item);
    }
}
