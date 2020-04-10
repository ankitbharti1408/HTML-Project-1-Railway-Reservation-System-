import java.io.*;
import java.util.*;
public class TrainInfo implements Serializable{

	private int trainno = 0;
	private String trainname="";
	private String time = "";
	private int portno=0;
	public TrainInfo()
	{
		
	}
	
	public void SetPortno(int portno)
	{
		this.portno = portno;
	}
	
	public int getPortno()
	{
		return portno;
	}
}

    